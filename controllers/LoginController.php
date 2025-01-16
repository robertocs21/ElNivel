<?php

namespace Controllers;
include '../models/cliente.php';
include '../models/clienteya.php';
include '../models/cursos_inscritos.php';
include '../models/cursos.php';
include '../models/cursosya.php';
include '../models/usuarios.php';
use Model\Usuarios;
use Model\Cursos;
use Model\Cliente;
use Model\cursos_inscritos;
use Model\cursosya;
use Model\clienteya;
use MVC\Router;

class LoginController{
    public static function acceso(Router $router){
        $auth = new Usuarios;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $alertas = [];
            $auth = new Usuarios($_POST);
            if(empty($alertas)){
                $usuario = Usuarios::where('email', $auth->email);
                //debuguear($usuario);
                if($usuario){
                    if($usuario->comprobarPasswordAndVerificado($auth->password)){
                        session_start();
                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre;
                        $_SESSION['login'] = true;
                        header('location: /directorio');
                    }
                }else{
                    Usuarios::setAlerta('error','Usuario no encontrado');
                }
            }
        }

        $router->render('auth/acceso',[
            'auth'=>$auth,
          
        ]);
    }
    public static function crearUsuario(Router $router){
        $usuario = new Usuarios();
        //Alertas vacias
        $alertas = [];
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
           
            $usuario->sincronizar($_POST);
            //debuguear($usuario);
                    //Hashear el password
            $usuario->hashPassword();
                    //Crear el usuario
            //debuguear($usuario);
            $resultado = $usuario->guardar();
            if($resultado){
            header('Location: /');
                    }
                    
                    
                }
        

        $router->render('auth/crearUsuario',[
            'usuario'=>$usuario
        ]);
    }
    
    public static function directorio(Router $router){
        $router->render('auth/directorio');
    }



    public static function buscar(Router $router){
        $cliente = new Cliente;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $cliente->sincronizar($_POST);
            //debuguear($cliente);
            if($cliente->nombre){
                header("Location: busqueda_clientes?nombre=$cliente->nombre");
            }
                elseif(!$cliene->nombre){
                    header("Location: busqueda_clientes?apellido=$cliente->apellido");
                }
                
                
            }
        
        $router->render('auth/buscar',[
            'cliente'=>$cliente
        ]);
    }
    public static function busqueda_clientes(Router $router){
        $nombre = $_GET['nombre'];
        $cliente = new Cliente();

        if(!$nombre){
            $apellido = $_GET['apellido'];
            $resultado = $cliente->buscarap($apellido);
            //ebuguear($resultado);
        }else{
            $resultado = $cliente->buscar($nombre);
            //debuguear($resultado);
        }
        $router->render('auth/busqueda_clientes',[
            'resultado'=>$resultado
        ]);
    }


    public static function cursos(Router $router){
        $curso = new Cursos;
        $res = $curso -> all();
       
        $router->render('auth/cursos',[
            'res'=>$res
        ]);
    }



    public static function adeudos(Router $router){
        $cliente = new Cliente;
        $res = $cliente -> all();
        //debuguear($res);
        $router->render('auth/adeudos',[
            'res'=>$res
        ]);
    }



    public static function nuevoClient(Router $router){
        $cliente = new Cliente;
        $ultimo = $cliente->last();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $cliente->sincronizar($_POST);
            //debuguear($cliente);
            $cliente->guardar();
            header("/");
        }
        $router->render('auth/nuevoClient',[
            'cliente'=>$cliente,
            'ultimo' =>$ultimo
        ]);
    }



    public static function alumnos_inscritos(Router $router){
        $router->render('auth/alumnos_inscritos');
    }



    public static function confirmar_inscripcion(Router $router){
        $router->render('auth/confirmar_inscripcion');
    }



    public static function crearCurso(Router $router){
        $curso=new Cursos;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $curso=new Cursos($_POST);
            
            $res=$curso->guardar();
            header('Location: /cursos');
        }

        $router->render('auth/crearCurso');
    }



    public static function cursos_inscritos(Router $router){
        $router->render('auth/cursos_inscritos');
    }



    public static function estado_cuenta(Router $router){
        $id=$_GET['id'];
        $nombre=$_GET['nombre'];
        $apellido=$_GET['apellido'];
        $consulta = "SELECT ci.id AS id, ci.cliente_id, ci.curso_id AS curso_id, ci.debe, c.fecha, c.cupo, c.nombre, c.precio, c.marca, c.maestro, c.hora, c.eliminado
        FROM cursos_inscritos AS ci
        INNER JOIN Cursos AS c ON ci.curso_id = c.id
        WHERE ci.cliente_id = '".$id."'";
        $mostrar = cursosya::SQL($consulta);
        $inscrito = new cursos_inscritos;
        //debuguear($mostrar);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $inscrito -> sincronizar($_POST);
            $inscrito->guardar();
            header("location: estado_cuenta?id=$id&nombre=$nombre&apellido=$apellido");
        }
        $router->render('auth/estado_cuenta',[
            'mostrar'=>$mostrar,
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'id'=>$id
        ]);
    }



    public static function lista_alumnos(Router $router){
        $router->render('auth/lista_alumnos');
    }



    public static function modificar_alumnos_inscritos(Router $router){
        $id=$_GET['id'];
        $nombre=$_GET['nombre'];
        $consulta = "SELECT ci.id AS ci_id, cl.*, c.nombre AS nombre_curso, c.fecha AS fecha_curso
        FROM cursos_inscritos AS ci
        INNER JOIN cliente AS cl ON ci.cliente_id = cl.id
        INNER JOIN Cursos AS c ON ci.curso_id = c.id
        WHERE ci.curso_id = '".$id."'";
        $mostrar = clienteya::SQL($consulta);
        $inscrito = new cursos_inscritos;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $inscrito -> sincronizar($_POST);
            $inscrito-> eliminar();
            header("Location: modificar_alumnos_inscritos?id=$id&nombre=$nombre");
        }
        $router->render('auth/modificar_alumnos_inscritos',[
            'mostrar'=>$mostrar,
            'nombre'=>$nombre
        ]);
    }




    public static function modificar_cursos_inscritos(Router $router){
        $id=$_GET['id'];
        $nombre=$_GET['nombre'];
        $apellido=$_GET['apellido'];
        $folio=$_GET['folio'];
        $consulta = "SELECT ci.id AS id, ci.cliente_id, ci.curso_id AS ci_curso_id, c.fecha, c.cupo, c.nombre, c.precio, c.marca, c.maestro, c.hora, c.eliminado
        FROM cursos_inscritos AS ci
        INNER JOIN Cursos AS c ON ci.curso_id = c.id
        WHERE ci.cliente_id = '".$id."'";

        $mostrar = cursosya::SQL($consulta);
        $inscrito = new cursos_inscritos;
       //debuguear($mostrar);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //debuguear($_POST);
            $inscrito -> sincronizar($_POST);
            $inscrito-> eliminar();
            header("Location: perfil_cliente?id=$id");
          
            
           
        }
        $router->render('auth/modificar_cursos_inscritos',[
            'mostrar'=>$mostrar,
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'id'=>$id,
            'folio'=>$folio
        ]);
    }



    public static function modificar_estado_cuenta(Router $router){
        $router->render('auth/modificar_estado_cuenta');
    }




    public static function perfil_cliente(Router $router){
        $id=$_GET['id'];
        $cliente = new Cliente;
        $resultado = $cliente -> find($id);
        //debuguear($resultado);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $resultado -> sincronizar($_POST);
            
            $resultado -> guardar();
        }
        $router->render('auth/perfil_cliente',[
            'resultado'=>$resultado
        ]);
    }




    public static function seleccionar_cursos(Router $router){
        $id=$_GET['id'];
        $cliente = new Cliente;
        $id = $cliente -> buscarfolio($id);
        $inscrito = new cursos_inscritos;
        $curso = new Cursos;
        $res = $curso -> all();
       //debuguear($id);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //debuguear($_POST);
            $inscrito -> sincronizar($_POST);
            $inscrito->guardar();
            
        }
        $router->render('auth/seleccionar_cursos',[
            'res'=>$res,
            'id'=>$id
        ]);
    }



    
    public static function modificar_curso(Router $router){
        $id=$_GET['id'];
        $curso = new Cursos;
        $resultado = $curso->find($id);
        //debuguear($resultado);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $resultado->sincronizar($_POST);
            //debuguear($_POST);
            $resultado->guardar();
            header("Location: cursos");
        }

        $router->render('auth/modificar_curso',[
            'resultado'=>$resultado
        ]);
    }
    
}
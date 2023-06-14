<?php

namespace App\Models;

class User extends Model {
  protected static string $table = 'users';
  protected static array $columnsDB  = ['id', 'patient_id', 'doctor_id', 'email', 'password', 'role'];

  public string $id;
  public string $patient_id;
  public string $doctor_id;
  public string $email;
  public string $password;
  public string $role;

  public function __construct( array $args = []) {
    $this->id = $args['id'] ?? '';
    $this->patient_id = $args['patient_id'] ?? '';
    $this->doctor_id = $args['doctor_id'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->password = $args['password'] ?? '';
    $this->role = $args['role'] ?? 'patient';
  }

  /* public function validar() {
      if (!$this->patient_id) {
          self::$errores[] = 'El email es obligatorio';
      }
      if (!$this->pass) {
          self::$errores[] = 'Debes ingresar una contraseña';
      }

      return self::$errores;
  } */

  /* public function insert() {
      $passHast = password_hash($this->pass, PASSWORD_BCRYPT);
      $query = " INSERT INTO " . static::$tabla . "( email, pass, tipo_usuario ) VALUES ('$this->email', '$passHast', '$this->tipo_usuario' ) ";
      
      $resultado = self::$db->query($query);

      return $resultado;
  } */

  /* public function existeUsuario() {
      //REVISAR SI UN USUARIO EXISTE
      $query = "SELECT * FROM " . self::$tabla . " WHERE email='" . $this->email . "' LIMIT 1";
      $resultado = self::$db->query($query);

      if (!$resultado->num_rows) {
          self::$errores[] = 'El Usuario no existe';
          return;
      }
      $resul = $resultado->fetch_object();

      return $resul;
  }

  public function ComprobarPass($resultado) {
      //Verificar si la contrasela es correcta
      $auth = password_verify($this->pass, $resultado->pass);
      if (!$auth) {
          self::$errores[] = 'El Password es incorrecto';
          return;
      }
      return $auth;
  }

  public function autenticar($resultado) {
      switch ($resultado->tipo_usuario) {
          case 1:

              $_SESSION['id'] = $resultado->id;
              $_SESSION['usuario'] = $resultado->tipo_usuario;
              
              header('Location: /admin/index');

              break;
          case 2:

              $_SESSION['id'] = $resultado->id;

              header('Location: /paciente');

              break;
          case 3:
              session_start();

              $_SESSION['id'] = $resultado->id;

              header('Location: /doctor');

              break;
          default:
              echo "Error de direccionamiento";
      }
  } */
}

?>
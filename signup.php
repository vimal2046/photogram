<?
 include 'libs/load.php';



?>

<!doctype html>
<html lang="en">
<? load_template('_head');?>

  <body>

<style>

.form-signup {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signup .checkbox {
  font-weight: 400;
}
.form-signup .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signup .form-control:focus {
  z-index: 2;
}
.form-signup input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  border-top-right-radius: 0 ;

}
.form-signup input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.form-signup input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signup input[type="tel"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0 ;
}
    </style>

<? load_template('_header');?>


<main >
  
  

  <? load_template('_signup'); ?>

</main>



    <script src="/photogram/assets/dist/js/bootstrap.bundle.min.js"></script>
      
  </body>
</html>


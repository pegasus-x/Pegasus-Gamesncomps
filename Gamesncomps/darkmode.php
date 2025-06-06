<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Toggle Button With Dark/Light Mode | CoderGirl</title>
  <!---Custom CSS File--->
   <style type="text/css">
     /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
label{
  position: relative;
  width: 480px;
  height: 180px;
  display: block;
  background: #d9d9d9;
  border-radius: 100px;
  cursor: pointer;
  box-shadow: inset 0px 5px 15px rgba(0,0,0,0.3), inset 0px -5px 15px rgba(255,255,255,0.3);
}
label:after{
  content: '';
  position: absolute;
  height: 160px;
  width: 160px;
  background: #f2f2f2;
  border-radius: 100px;
  top: 10px;
  left: 10px;
  transition: 0.5s;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
input:checked ~ label:after{
  left: 470px;
  transform: translateX(-100%);
  background: linear-gradient(180deg,#777,#3a3a3a);
}
input:checked ~ label{
  background: #242424;
}
.background{
  position: absolute;
  width: 100%;
  height: 100vh;
  background: #fff;
  z-index: -1;
  transition: 0.5s;
}
input:checked + label + .background{
  background: #242424;
}
input{
  display: none;
}
   </style>
</head>
<body>
  <input type="checkbox" id="dark-mode">
  <label for="dark-mode"></label>
  <div class="background"></div>
</body>
</html>
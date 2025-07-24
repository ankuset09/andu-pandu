
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
   .desktop-1,
.desktop-1 * {
  box-sizing: border-box;
}
.desktop-1 {
  background: linear-gradient(
    to left,
    rgba(225, 206, 194, 0.7),
    rgba(225, 206, 194, 0.7)
  );
  opacity: 0.8;
  height: 766px;
  position: relative;
  box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
  overflow: hidden;
}
.rectangle-1 {
  background: linear-gradient(to left, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
  border-radius: 70px;
  border-style: solid;
  border-color: #131212;
  border-width: 1px;
  width: 404px;
  height: 485px;
  position: absolute;
  left: 196px;
  top: 131px;
  object-fit: cover;
}
.rectangle-2 {
  background: linear-gradient(to left, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
  border-radius: 71px;
  border-style: solid;
  border-color: #161515;
  border-width: 1px;
  width: 329px;
  height: 353px;
  position: absolute;
  left: 861px;
  top: 166px;
  object-fit: cover;
}
.sign-up {
  color: #00664d;
  text-align: left;
  font-family: "Jaini-Regular", sans-serif;
  font-size: 32px;
  font-weight: 400;
  position: absolute;
  left: 218px;
  top: 30px;
  width: 170px;
  height: 38px;
}
.sign-in {
  color: #00664d;
  text-align: left;
  font-family: "Jaini-Regular", sans-serif;
  font-size: 32px;
  font-weight: 400;
  position: absolute;
  left: 1111px;
  top: 124px;
  width: 128px;
  height: 29px;
}
.exclude {
  width: 0px;
  height: 0px;
  position: absolute;
  left: 0px;
  top: 0px;
  overflow: visible;
  object-fit: cover;
}
.name {
  color: #00997a;
  text-align: left;
  font-family: "IrishGrover-Regular", sans-serif;
  font-size: 32px;
  font-weight: 400;
  position: absolute;
  left: 239px;
  top: 153px;
  width: 149px;
  height: 43px;
}
.email {
  color: #00997a;
  text-align: left;
  font-family: "IrishGrover-Regular", sans-serif;
  font-size: 32px;
  font-weight: 400;
  position: absolute;
  left: 158px;
  top: 420px;
  width: 120px;
  height: 30px;
}
.password {
  color: #00997a;
  text-align: left;
  font-family: "IrishGrover-Regular", sans-serif;
  font-size: 32px;
  font-weight: 400;
  position: absolute;
  left: 150px;
  top: 503px;
  width: 210px;
  height: 60px;
}
.confirm-password {
  color: #00997a;
  text-align: left;
  font-family: "IrishGrover-Regular", sans-serif;
  font-size: 32px;
  font-weight: 400;
  position: absolute;
  left: 134px;
  top: 573px;
  width: 286px;
  height: 77px;
}
.username {
  color: #00997a;
  text-align: left;
  font-family: "IrishGrover-Regular", sans-serif;
  font-size: 32px;
  font-weight: 400;
  position: absolute;
  left: 120px;
  top: 335px;
  width: 210px;
  height: 67px;
}
.username2 {
  color: #00997a;
  text-align: left;
  font-family: "IrishGrover-Regular", sans-serif;
  font-size: 32px;
  font-weight: 400;
  position: absolute;
  left: 906px;
  top: 262px;
  width: 211px;
  height: 49px;
}
.password2 {
  color: #00997a;
  text-align: left;
  font-family: "IrishGrover-Regular", sans-serif;
  font-size: 32px;
  font-weight: 400;
  position: absolute;
  left: 906px;
  top: 342px;
  width: 196px;
  height: 60px;
}
.sign-up2 {
  color: #00664d;
  text-align: left;
  font-family: "Jaini-Regular", sans-serif;
  font-size: 32px;
  font-weight: 400;
  position: absolute;
  left: 330px;
  top: 650px;
  width: 210px;
  height: 60px;
}
.sign-in2 {
  color: #00664d;
  text-align: left;
  font-family: "Jaini-Regular", sans-serif;
  font-size: 32px;
  font-weight: 400;
  position: absolute;
  left: 1093px;
  top: 576px;
  width: 210px;
  height: 56px;
}
.rectangle-3 {
  border-radius: 20px;
  border-style: solid;
  border-color: #131212;
  border-width: 5px;
  opacity: 0.2;
  width: 362px;
  height: 59px;
  position: absolute;
  left: 217px;
  top: 203px;
  box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 1);
}


  </style>
</head>
<body>
<div
  class="desktop-1"
  style="
    background: url(bg10.jpg) center;
    background-size: cover;
    background-repeat: no-repeat;
  "
>
  <img class="rectangle-1" src="cbbulb.png" />
  <img class="rectangle-2" src="cbbulb.png" />
  <div class="sign-up">Sign Up</div>
  <div class="sign-in">Sign In</div>
  <img class="exclude" src="exclude0.svg" />
  <div class="name">Name: </div>
  <div class="email">Email:</div>
  <div class="password">Password:</div>
  <div class="confirm-password">Confirm Password:</div>
  <div class="username">Username: <input type="text" style="height: 50%; background:transparent; border:1px solid black; border-radius:10px;"></div>
  <div class="username2">Username:</div>
  <div class="password2">Password:</div>
  <div class="sign-up2">Sign up</div>
  <div class="sign-in2">Sign in</div>

  <div class="rectangle-3"></div>
</div>

</body>
</html>
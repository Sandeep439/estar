<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
body{
    background-color: #000;
}
.nav{
    position: absolute;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 80px;
    background-color: #ef9273;
}
.footer{
    position: absolute;
    top: 220%;
    right: 0%;
    width: 100%;
    height: 363px;
    background-color: #fef9f8;
}
.links{
    position: absolute;
    top: 30%;
    font-family: 'Bona Nova', serif;
    text-decoration: none;
    color: #0d0d0d;
}
.links:hover{
    color: #fef9f8;
}
.link{
    position: absolute;
    bottom: 15px;
}
#link1{
    right: 4%;
}
#link2{
    right: 2%;
}
#link3{
    right: 6%;
}
#icon{
    height: 25px;
    width: 25px;
}
.content{
    position: absolute;
    top: 88%;
    left: 0%;
    width: 100%;
    height: 180%;
    background-color: #ef9273;
}
.items{
    width: 60%;
    display: grid;
    justify-content: center;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr;
}
#item{
    position: relative;
    top: 30%;
    left: 100%;
    width: 98%;
    height: 360px;
    font-family: 'Bona Nova', serif;
    color:#0d0d0d;
}
.featured{
    width: 100%;
    height: 300px;
}
.About{
    position: absolute;
    top: 44%;
    left: 20%;
    width: 60%;
    height: 300px;
    text-align:center;
    color: #0d0d0d;
    font-family: 'Bona Nova', serif;
}
.logo{
    position: relative;
    left: 4%;
    height: 50px;
    width: 50px;
}
#alert{
    position: absolute;
    top: 100%;
    left: 0%;
    width: 100%;
    background-color:#c8d8e4;
    text-align: center;
}
#modal{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-25%, 100%);
    }
    #box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 700px;
    }

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="login.js"></script>
</head>
<body>

<img src="home.jfif" alt="" style="position:fixed;top:0%;left:0%;width: 1535px;
  height: 720px;">
  <h1 style="position: absolute;top:35%;left:36%;color:#0d0d0d;font-family: 'Bona Nova', serif;font-size:45px;">New Products, Great Deals</h1>
  <h2 style="position: absolute;top:47%;left:40%;color:#0d0d0d;">Limited Time Price Drop!</h2>
  <button class="btn btn-primary" id="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color:#ef9273;text-decoration:none;color:#fef9f8;">Shop Now</button>


<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
    <div class="modal-dialog" id="box">
      <div class="modal-content" style="background-color: #c8d8e4">
        <div class="modal-header" >
        <img src="usericon.png" alt="" style="position:absolute;top:1%;left:44%;border-radius:50%;height: 70px;width:70px;">
          <h5 class="modal-title" id="staticBackdropLabel" >Estar Login!!!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <br><br>
        </div>
        <div class="modal-body">
            <form action="validate.php" method="POST">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
                  <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd">
                  <label for="floatingPassword">Password</label>
                </div>
                <br>
                <button class="btn btn-success" >Login</button>
        </form>              
        </div>
      </div>
    </div>
  </div>
  


<div class="nav">
<img src="logo.png" alt="" class="logo">
<b><h5 class="links" style="top:60%;color: #0C2340;">E Star</h5></b>
<div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
Opening Sale, 28% Discounts On Every Product!!!
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
</div>
<b>
<a href="home.php" class="links" style="right: 29%;">Home</a>
<a href="shop.php" class="links" style="right: 23%;">Shop</a>
<a href="about.php" class="links" style="right: 16%;">About</a>
<a href="contact.php" class="links" style="right: 9%;">Contact</a>
</b>
<a href="" class="links" style="right: 4%"><img src="store.png" alt="" id="icon"></a>
</div>
<div class="content">
<center><h2 style="font-family: 'Bona Nova', serif; color:#0d0d0d;position: absolute; top: 2%;left:43%;">Featured Items</h2></center>
<div class="items">
<div id="item"><img src="shoe.jpg" alt="" class="featured"><br><br><b>Campus Refresh Pro <br> $19.90</b> </div>
<div id="item"><img src="1plus.jpg" alt="" class="featured"><br><br><b>Oneplus 9 Series 5G <br> $399.90</b></div>
<div id="item"><img src="samsung.jpg" alt="" class="featured"><br><br><b>Samsung Galaxy Book Go 5G <br> $1999.90</b></div>
</div>
<div class="About">
<h1>About</h1>
<p style="padding:25px;font-size: 20px;">This is your About page. This space is a great opportunity to give a full background on who you are, what you do and what your site has to offer. Your users are genuinely interested in learning more about you, so don’t be afraid to share personal anecdotes to create a more friendly quality. If you’re a business, talk about how you started and share your professional journey. Explain your core values, your commitment to customers and how you stand out from the crowd. Add a photo, gallery or video for even more engagement</p>
</div>

</div>


<div class="footer">
<b>
<label for="" class="link" style="right: 8%; color:#ef9273;font-family: 'Bona Nova', serif">follow us on:</label>
<a href="https://instagram.com/sandeep.parimi?utm_medium=copy_link" class="link" id="link1"><img src="insta.png" alt="" id="icon"></a>
<a href="https://wa.me/qr/HY7JCQMGKECYD1" class="link" id="link2"><img src="whats.png" alt="" id="icon"></a>
<a href="https://www.linkedin.com/in/sandeep-parimi-b42281196" class="link" id="link3"><img src="linked.png" alt="" id="icon"></a>
</b>
</div>
</body>
</html>
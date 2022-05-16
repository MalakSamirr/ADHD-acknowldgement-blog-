<?php 
  session_start();

  if (isset($_SESSION['result'])) {
    if ($_SESSION['result'] >= 60) {
      echo "<script> alert('y ou are affected') </script>";
    } else {
      echo "<script> alert('you are not affected') </script>";
    }

    unset($_SESSION['result']);
  }
?>

<html>
    <head>
        <style>
            .d1{
                background-color:black;
                color:white;
                width: 100%;
                height: 12%;
                font-size: 25px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                

            }
            a:link{
                text-decoration: none;
                padding: 10px;
            }
            .b{
                background-image: url(back.jpg);
                background-repeat: no-repeat;
                background-size: 100%;
                
            }
.d3{
   
   float: left;
   width: 70%;
   height: 100px;
   padding-left: 5px; 
   margin-top: 5px;
}
.d4{
  background-color:black;
  float: left;
  width: 360px;
  height: 600px;
  padding-left: 10px;
  padding-right: 10px;
  margin-left: 5px;
  font-size: 18px;
  color: white;
  margin-top: 5px;
}
#lst{
  display: none;
}
#lst1{
  display: none;
}
#lst2{
  display: none;
}
#lst3{
  display: none;
}
#lst4{
  display: none;
}
#lst5{
  display: none;
}
#lst6{
  display: none;
}
#lst7{
  display: none;
}
#lst8{
  display: none;
}
        </style>
    </head>
    <body>
      <div class="d1">
        <?php include 'nav.php'; ?>
      </div>   
          
          <div class="d3" >
            
              <img  class="slide" src="img1.jpeg" width="100%" height="600px" >
              <img  class="slide" src="img2.jpeg" width="100%" height="600px">
              <img  class="slide" src="img3.jpeg" width="100%" height="600px">
              <img  class="slide" src="img4.jpeg" width="100%" height="600px">
              <img  class="slide" src="img5.jpeg" width="100%" height="600px">
              <img  class="slide" src="img6.jpeg" width="100%" height="600px">
              <img  class="slide" src="img7.jpeg" width="100%" height="600px">
              <img  class="slide" src="img8.jpeg" width="100%" height="600px">
              <img  class="slide" src="img9.jpeg" width="100%" height="600px">
              <img  class="slide" src="img10.jpeg" width="100%" height="600px">
              <img  class="slide" src="img11.jpeg" width="100%" height="600px">

        </div>
       <script>
                   var index =0;
                   slideshow()
                   function slideshow() {
                    var x=document.getElementsByClassName("slide");
                       for (var i = 0; i < x.length; i++) {
                           x[i].style.display="none"
                    }
                         if (index > x.length-1){ 
                           index=0;
                           }
       
                         x[index].style.display="block"
                         index++
                         
                         setTimeout(slideshow,4000) 
                       
       
                   }
               </script>
               <div class="d4">
      
                <img src="icon.png" width="50" height="50" ondblclick="lst.style.display='block'" onclick="lst.style.display='none'" style="margin-top: 5px;"> Test<span id="lst">
                 <p>if you have a suspicion, even if it’s simple, that your son has this desease. This simple test will help you . So don’t hesitate to enter it.<a href="Test.php">click her</a></p></span><br>
                     <img src="icon.png" width="50" height="50" ondblclick="lst1.style.display='block'" onclick="lst1.style.display='none'"> Info<span id="lst1">
                     <p> ADHD is one of the most common neurodevelopmental disorders of childhood. 
                         It is usually first diagnosed in childhood and often lasts into adulthood. 
                         Children with ADHD may have trouble paying attention, controlling impulsive 
                         behaviors (may act without thinking about what the result will be), 
                         or be overly active.
                       </p></span><br>
                       <img src="icon.png" width="50" height="50" ondblclick="lst2.style.display='block'" onclick="lst2.style.display='none'"> Causes<span id="lst2">
                       <p> Scientists are studying cause(s) and risk factors in an effort to find 
                           better ways to manage and reduce the chances of a person having ADHD. 
                           The cause(s) and risk factors for ADHD are unknown, but current research 
                           shows that genetics plays an important role. Recent studies of twins link genes with ADHD
                         </p></span><br>
                         <img src="icon.png" width="50" height="50" ondblclick="lst3.style.display='block'" onclick="lst3.style.display='none'">Symptoms<span id="lst3">
                <p> Typically, ADHD symptoms arise in early childhood. According to the DSM-5, 
                    several symptoms are required to be present before the age of 12. 
                    Many parents report excessive motor activity during the toddler years, 
                    but ADHD symptoms can be hard to distinguish from the impulsivity, 
                    inattentiveness and active behavior that is typical for kids under the 
                    age of four. In making the diagnosis, children should have six or more 
                    symptoms of the disorder present; adolescents 17 and older and adults 
                    should have at least five of the symptoms present. The DSM-5 lists 
                    three presentations of ADHD—Predominantly Inattentive, Hyperactive-Impulsive 
                    and Combined. The symptoms for each are adapted and summarized below.
                  </p></span><br>
                  <img src="icon.png" width="50" height="50" ondblclick="lst4.style.display='block'" onclick="lst4.style.display='none'">Treatment<span id="lst4">
                <p> In most cases, ADHD is best treated with a combination of behavior therapy and medication. 
                    For preschool-aged children (4-5 years of age) with ADHD, behavior therapy, 
                    particularly training for parents, is recommended as the first line of treatment 
                    before medication is tried. What works best can depend on the child and family. 
                    Good treatment plans will include close monitoring, follow-ups, and making changes, 
                    if needed, along the way.
                  </p></span><br>
                  <img src="icon.png" width="50" height="50" ondblclick="lst5.style.display='block'" onclick="lst5.style.display='none'">Doctors<span id="lst5">
                <p> for more informations you can visit a doctor ,
                    here in this page you can find a lot of doctors for all cases so open it to help you
                  </p></span><br>
                  <img src="icon.png" width="50" height="50" ondblclick="lst6.style.display='block'" onclick="lst6.style.display='none'">Videos<span id="lst6">
                <p> if you want to listen more about this disease you can enter this videos page will help you alot
                  </p></span><br>
                  <img src="icon.png" width="50" height="50" ondblclick="lst7.style.display='block'" onclick="lst7.style.display='none'"> About Us<span id="lst7">
                <p> To More informations about us <a href="about.php">Click Her</a>
                </p></span>
              </div>
    </body>
</html>
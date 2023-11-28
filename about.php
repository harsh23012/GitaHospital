<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container h1{
            color: red;
        }
        .service{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .specialist{
            display: flex;
            justify-content: space-between;
        }
        .contact h2{
    margin-bottom: 3rem;
}

.contact form{
    max-width: 70rem;
    margin: 1rem auto;
    text-align: center;
    margin-bottom: 3rem;
}

.contact form .input-box{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.contact form .input-box input,
.contact form textarea{
    width: 100%;
    padding: 1.5rem;
    font-size: 1.6rem;
    color: var(--text-color);
    background: var(--second-bg-color);
    border-radius: .8rem;
    margin: .7rem 0;
}
.contact form .input-box input{
    width: 49%;
}
.contact form textarea{
    resize: none;
}

.contact form .btn{
    background-color: #2EB8F8;
    margin-top:2rem ;
    cursor: pointer;
}
#gender{
    margin-top: 8px;
    margin-left: 8px;
    width: 345px;
    height: 55px;
    border: 2px black solid;
    border-radius: 10px;
}

    </style>
</head>
<body>
    <?php require "nav.php" ?>

    <div class="container about text-center" style="margin-top: 80px;">
        <h1><b>GITA HOSPITAL</b></h1>
        <div class="container location">
            <h3>Location</h3>
            <p>Gita Hospital, Badaraghunathpur, Madanpur, Khordha</p>
            <p>Bhubaneshwar</p>
            <p>Pin - 752054</p>
            <a href="https://www.google.com/maps/place/GITA+Autonomous+College+Bhubaneswar/@20.2430251,85.7153744,15z/data=!4m6!3m5!1s0x3a19a9ac65b76c7d:0x91f0f4d506f7c20b!8m2!3d20.2382312!4d85.7225401!16s%2Fm%2F0cr493j?entry=ttu"><img src="img/location.svg" alt="location" style="height: 50px; width: 50px;">
            </a>
            <p>Tap on icon to get the location on google map</p>
        </div>

        <h2 style="color: red;">Our Best Services</h2>
        <div class="container">
            <div class="container service">

            <div class="card" style="width: 18rem;">
                <img src="img/allergy.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Allergy and Immunology</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/anesthology.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Anesthesiology</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/cardiology.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Cardiology</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/rectal.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Colon and Rectal Surgery</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/dermatology.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Dermatology</p>
                </div>
            </div>
                
        </div>

            <h2 style="color: red;">Our Specialists</h2>
            <div class="container specialist">
                <div class="card" style="width: 18rem;">
                    <img src="img/doctor/doctor1webp.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">DR. Joseph Antony</p>
                      <p class="card-text">Allergy and Immunology Specialist</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/doctor/doctor2.avif" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">DR. David Anderson</p>
                      <p class="card-text">Anesthesiology Specialist</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/doctor/doctor3.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">DR. Lisa Martin</p>
                      <p class="card-text">Cardiology Specialist</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/doctor/doctor4.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">DR. Jonathan Das</p>
                      <p class="card-text">Colon and Rectal Surgery Specialist</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/doctor/doctor5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"> Dr. William W. Grosh</p>
                      <p class="card-text">Dermatology Specialist</p>
                    </div>
                </div>
            </div>
            <h2 style="color: red;">Contact Us</h2>
            <div class="container contact">
            <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="tel" placeholder="Mobile Number">
                <input type="text" placeholder="Concern Subject">
            </div>
            <div class="input-box">
                <input type="number" placeholder="age">
                <select id="gender" name="gender" >
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Detailed Concern!"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
            </div>


        </div>
    </div>
</body>
<footer>
<?php require "footer.php" ?>
</footer>
</html>
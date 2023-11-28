<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


      .heading{
        text-align: center;
        color: red;
      }
        .specialities{
            text-align: center;
        }
        .container .special .specialities{
          height: 300px;
          width: 400px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          text-align: center;
          border: 2px;
          border-radius: 10%;
          margin-bottom: 20px;
          background-color: aqua;
          transition: transform .2s;
        }

        .container .special .specialities:hover{
          background-color: aquamarine;
          transform: scale(1.1);
        }
        .container .special{
          margin-top: 80px;
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          align-items: center;
          
        }

        .container .special .specialities .read{
          background-color: rgb(67, 67, 201);
          color: white;
          border: 1px;
          border-radius: 100%;
          width: fit-content;
          height: 30px;
          transition: transform .2s;
        }
        .container .special .specialities .read:hover{
          transform: scale(1.1);
        }

       
    </style>
</head>
<body>
    <?php require "nav.php" ?>
    <div id="carouselExampleRide" class="carousel slide my-1" data-bs-ride="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/hos1.jpg" class="d-block" alt="Hospital Images"height="685px" width="100%">
          </div>
          <div class="carousel-item">
            <img src="img/hos2.jpg" class="d-block" alt="Hospital Images"height="685px" width="100%">
          </div>
          <div class="carousel-item">
            <img src="img/hos3.jpg" class="d-block" alt="Hospital Images"height="685px" width="100%">
          </div>
          <div class="carousel-item">
            <img src="img/hos4.jpg" class="d-block" alt="Hospital Images"height="685px" width="100%">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div class="container heading" >
        <h1><b>GITA Hospital</b> </h1>
        <h2>BBSR</h2>
      </div>


      <div class="container my-3 specialities">

        <h1>Specialities</h1>
        <h3>We offer complete healthcare solutions for your health concerns</h3>

        <div class="container  special">
          <div class="container specialities">
            <h3>Allergy and Immunology</h3><br>
            <p>
              Allergy and immunology is a subspecialty of internal medicine. An allergist-immunologist evaluates, diagnoses, and manages disorders involving the immune system. Such conditions include asthma, anaphylaxis, eczema, rhinitis, and reactions to drugs, foods, and insect stings. ...</p>
              <button class="read">Read More</button>
          </div>

          <div class="container specialities">
            <h3>Anesthesiology</h3>
            <p>
              A doctor of anesthesiology—an anesthesiologist—practices anesthesia, the use of medication to produce a loss of sensation (particularly pain) in the body. Without anesthesia, most surgical operations would not be possible. ...</p>

              <button class="read">Read More</button>
            </div>
            
            <div class="container specialities">
              <h3>Cardiology</h3>
              <p>
                Cardiology is a subspecialty of internal medicine. A doctor of cardiology—a cardiologist—deals with diseases and maladies of the heart and blood vessels (the cardiovascular system). Cardiologists are experts in the processes and prevention of heart disease. ...</p>
                <button class="read">Read More</button>
              </div>
              
              <div class="container specialities">
                <h3>Colon and Rectal Surgery</h3>
                <p>
                  Colon and rectal surgeons diagnose and treat diseases of the anal canal, colon, intestinal tract, perianal area, and rectum by both medical (nonsurgical) and surgical means.  ...</p>
                  <button class="read">Read More</button>
          </div>
          <div class="container specialities">
            <h3>Dermatology</h3>
            <p>
              A doctor of dermatology—a dermatologist—finds, prevents, and treats diseases of the skin, hair, nails, and adjacent mucous membranes. Dermatologists identify and treat more than 3,000 conditions, and they help improve the quality of life for people suffering from minor and irritating conditions to severe and life-threatening maladies.  ...</p>
              <button class="read">Read More</button>
          </div>
        </div>

      </div>

      <div class="container text-center" style="color: red;">
        <h1>Available Beds</h1>
      </div>

      <?php require "footer.php" ?>

</body>
</html>
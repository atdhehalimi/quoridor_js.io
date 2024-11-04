<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Centered Div with Grid and White Ball</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .custom-div {
      background-color: #B0A092;
      position: absolute;
      border-radius: 5%;
      transition: all 1s ease 0s;
      width: 520px;
      height: 520px;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      flex-wrap: wrap;
      align-content: space-between;
      padding: 1rem;
    }

    .inner-div {
      background-color: #A18E80;
      position: relative;
      border-radius: 5%;
      width: 30%;
      height: 30%;
      margin: 1.6%;
    }

    /* .white-ball {
      position: relative;
    } */
    .white-ball::before {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      width: 80%;
      height: 80%;
      background-color: white;
      border-radius: 50%;
      transform: translate(-50%, -50%);
    }

    .white-ball1::before {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      width: 80%;
      height: 80%;
      background-color: white;
      opacity: 0.5;
      border-radius: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body>
  <div class="contadddiner">
    <div class="row justify-content-center">
      <div class="custom-div col-12 co">
        <div class="inner-div"></div>
        <div class="inner-div"></div>
        <div class="inner-div"></div>
        <div class="inner-div"></div>
        <div class="inner-div white-ball"></div> <!-- Div with the white ball -->
        <div class="inner-div"></div>
        <div class="inner-div"></div>
        <div class="inner-div"></div>
        <div class="inner-div"></div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


  <script>
    $('.inner-div').hover(
      function() {
        $(this).addClass('white-ball1');
      },
      function() {
        $(this).removeClass('white-ball1');
      }
    );
  </script>

</body>

</html>
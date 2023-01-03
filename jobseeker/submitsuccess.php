<html>
<head>
  <script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div id="submission">
<script>Swal.fire({
        title: 'Dear User',
        text: 'It may take 3 days to verify your profile! You will get an email after the verification!',
        icon: 'success',
        confirmButtonText: 'Ok!',
        
      }).then((result) => {
        if (result.value) {
      window.location.href='../index.html'
        }
      })
      </script>

</div>

</body>
</html>
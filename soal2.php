<!DOCTYPE html>
<html lang="en">

<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <title>Soal 2</title>
</head>
<p>Soal 2 (validasi password)</p>
<body>
         <form>
                  <input type="text" name="txt_uname" id="txt_uname" placeholder="Username">
                  <button type="button" id="btn_submit">Submit</button>
         </form>

</body>

</html>

<script>
        document.getElementById("btn_submit").onclick = function() {validasi()};

        function validasi()
        {
            var pass = document.getElementById("txt_uname").value;
            if(pass.length>8)
            {
               alert('Panjang password lebih dari 8 karakter');
            }
            else if(pass.length<8)
            {
               alert('Panjang password kurang dari 8 karakter');
            }
            else if(/[a-z]/.test(pass) == false)
            {
               alert('Password harus terdapat paling kurang 1 huruf kecil');
            }
            else if(/[A-Z]/.test(pass) == false)
            {
               alert('Password harus terdapat paling kurang 1 huruf besar');
            }
            else if(/[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(pass) == false)
            {
               alert('Password harus terdapat paling kurang 1 spesial karakter');
            }
            else
            {
               alert('Password valid !');
            }

        }
</script>
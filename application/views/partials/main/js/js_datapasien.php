	<script type="text/javascript">
      function usia(){
        var date = document.getElementById('single_cal4').value;
        var today = new Date();
        var birthday = new Date(date);
        // alert(birthday);
        var year = 0;
        if (today.getMonth() < birthday.getMonth())
         {
          year = 1;
        } else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
          year = 1;
        }
        var age = today.getFullYear() - birthday.getFullYear() - year;
     
        if(age < 0)
        {
          age = 0;
        }
        $("#usia_isi").val(age);
      }
    </script>
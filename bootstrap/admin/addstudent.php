<?php include'header.php'?>
</div>
        <div class="container-fluid justify-content-center col-md-4">
        <form action="insert.php" class="align-items-center border p-5 my-5" method="post">
        <div class="mb-3 mt-2">
          <label for="rollno">Rollno:</label><br>
          <input type="text" id="rollno" class="form-control" placeholder="Enter rollno here" name="rollno"><br>
        </div>
        <div class="mb-3">
            <label for="year">Year:</label><br>
            <input type="text" id="year" class="form-control" placeholder="Enter year here" name="year"><br>
          </div>
          <div class="mb-3">
            <label for="name">Name:</label><br>
            <input type="text" id="name" class="form-control" placeholder="Enter name here" name="name"><br>
          </div>
          <div class="mb-3">
            <label for="tamil">Tamil:</label><br>
            <input type="text" id="tamil" class="form-control" placeholder="Enter tamilmarks here" name="tamil"><br>
          </div>
          <div class="mb-3">
            <label for="english">English:</label><br>
            <input type="text" id="english" class="form-control" placeholder="Enter englishmarks here" name="english"><br>
          </div>
          <div class="mb-3">
            <label for="maths">Maths:</label><br>
            <input type="text" id="maths" class="form-control" placeholder="Enter mathsmarks here" name="maths"><br>
          </div>
          <div class="mb-3">
            <label for="science">Science:</label><br>
            <input type="text" id="science" class="form-control" placeholder="Enter sciencemarks here" name="science"><br>
          </div>
          <div class="mb-3">
            <label for="social">Social:</label><br>
            <input type="text" id="social" class="form-control" placeholder="Enter socailmarks here" name="social"><br>
          </div>
        <button type="submit" class="btn btn-primary d-flex justify-content-center" value="add">Submit</button>
      </form>
      </div>
      <?php include'footer.php'?>
    </main>
</body>

</html>
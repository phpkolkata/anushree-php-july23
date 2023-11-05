<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6 card shadow p-4 mt-4">
          <form action="result.php" method="post">
            <h1>Student Result</h1>
            <hr />
            <div>
              <label class="form-label">Name:</label>
              <input type="text" name="nm" class="form-control" />
            </div>

            <div>
              <label class="form-label">Age:</label>
              <input type="text" name="age" class="form-control" />
            </div>
            <div>
              <label class="form-label">Class:</label>
              <input type="text" name="class" class="form-control" />
            </div>
            <div>
              <label class="form-label">Sec:</label>
              <input type="radio" name="sec" value="A" />A
              <input type="radio" name="sec" value="B" />B
            </div>
            <br />
            <h2>Marks:</h2>
            <hr />

            <div>
              <label class="form-label">English:</label>
              <input type="text" name="eng" class="form-control" />
            </div>
            <div>
              <label class="form-label">Math:</label>
              <input type="text" name="math" class="form-control" />
            </div>
            <div>
              <label class="form-label">Science:</label>
              <input type="text" name="sci" class="form-control" />
            </div>
            <hr />
            <button class="btn btn-primary float-end btn-lg">Generate</button>
          </form>
        </div>
        <div class="col-3"></div>
      </div>
    </div>
  </body>
</html>

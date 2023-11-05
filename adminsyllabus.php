<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Notes</title>
    
   
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

*, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 350;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}

html, body {
    height: 100%;
    background-color: #152733;
    overflow: hidden;
}


.form-holder {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 80vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 50px;
}

.form-content .form-items {
    border: 4px solid #366de6;
    padding: 40px;
    display: inline-block;
    width: 95%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 20px;
}

.form-content p {
    
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 5px;
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #ffffff;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
    width: 90%;
    padding: 7px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #dde8ec;
    font-size: 15px;
    font-weight: 300;
    color: #1d31e9;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}


.btn-primary{
    background-color: #6C757D;
    outline: none;
    border: 0px;
     box-shadow: none;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 90%;
    padding: 8px 18px;
    border-radius: 5px;
    text-align: left;
    background-color: #f3f0f0;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 100px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up{
    margin-top: -10px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback{
    color: #ff606e;
}

.valid-feedback{
   color: #2acc80;
}



    </style>
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder d-flex align-items-center">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Input Form</h3>
                        <p>Fill in the data below.</p>
                        <form action="syllabus.php" method="post" enctype="multipart/form-data">

                            <div class="col-md-12">
                                <select class="form-select mt-3"  name="year" required >
                                    <option selected disabled value="">Year</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                             </select>
                            </div>

                           <br><br>

                        <div class="col-md-12" style="background-color:#dde8ec;margin: 0 50px 0 0; padding:8px;">
                            <input class="form-control mt-3"type="file" id="pdf" name="image" accept=".pdf" required>
                        </div><br><br>
                        
                        <div class="form-button mt-3">
    <button id="submit" type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    *{
      box-sizing: border-box;
    }
    body{
      padding:2rem 4rem;
      font-family: Arial, Helvetica, sans-serif;
    }
    p{
      margin:0;
      font-size: .8rem;
    }
    .card{
      border:1px solid #F6F6F6;
      margin-bottom:2rem;
    }

    p.question{
      background-color:#F6F6F6;
      padding:.5rem .5rem;
      font-weight: bold;
    }

    p.answer{
      background-color:#eceef9;
      padding:.5rem 1rem;
      min-height: 6rem;
      text-transform: capitalize;
    }
    .course-header{
      padding:.25rem 1rem;
      background-color:#222;
      color:white;
      font-weight: bold;
      width:auto;
      float: left;
    }
    
  </style>
</head>
<body>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="container">
            <h1>Personal Statement</h1>
            <p>by {{$sop->user->name}}</p>
            <hr>

            <p class="course-header">
              Writing about the course
            </p>
            <br><br>

            <div class="card">
              <p class="question">
                Why are you applying for your chosen course(s)?
              </p>
              <p class="answer">{{$sop->about1}}</p>
            </div>

            <div class="card">
              <p class="question">
                Why does this subject interest you? Include evidence that you understand what’s required to study the course, e.g. if applying for psychology courses, show that you know how scientific the subject is.
              </p>
              <p class="answer">{{$sop->about2}}</p>
            </div>

            <div class="card">
              <p class="question">
                Why do you think you’re suitable for the course(s)? Do you have any particular skills and experience that will help you to succeed on the course(s)?
              </p>
              <p class="answer">{{$sop->about3}}</p>
            </div>
            
            <div class="card">
              <p class="question">
                Do your current or previous studies relate to the course(s) that you have chosen? If so, how?
              </p>
              <p class="answer">{{$sop->about4}}</p>
            </div>

            <div class="card">
              <p class="question">
                Have you taken part in any other activities that demonstrate your interest in the course(s)?
              </p>
              <p class="answer">{{$sop->about5}}</p>
            </div>






            <p class="course-header">
              Skills and achievements
            </p>
            <br><br>

            <div class="card">
              <p class="question">
                Universities like to know the skills you have that will help you on the course, or generally with life at university,
                such as any accredited or non-accredited achievements.
              </p>
              <p class="answer">{{$sop->skill1}}</p>
            </div>
            
            <div class="card">
              <p class="question">
                Also think about any other achievements you’re proud of, positions of responsibility that you hold or have held both in and out
                of school, and attributes that make you interesting, special or unique.
              </p>
              <p class="answer">{{$sop->skill2}}</p>
            </div>




            <p class="course-header">
              Hobbies & Interest
            </p>
            <br>
            <br>

            <div class="card">
              <p class="question">
                Make a list of your hobbies, interests and social activities. Then think about how they demonstrate your personality, skills and abilities. Try to link them to the skills and experience required for your course(s).
              </p>
              <p class="answer">{{$sop->interest}}</p>
            </div>



            <p class="course-header">
              Work experience 
            </p>
            <br>
            <br>

            <div class="card">
              <p class="question">
                Include details of jobs, placements, work experience or voluntary work, particularly if it’s relevant to your chosen course(s).
                Try to link any experience to skills or qualities related to the course.
              </p>
              <p class="answer">{{$sop->experience}}</p>
            </div>
            

            <p class="course-header">
              Mature students
            </p>
            <br>
            <br>
            <div class="card">
              <p class="question">
                Explain what you’ve been doing since leaving education, and provide additional evidence to support your application. If you’re not in full-time education, you should give details of any relevant work experience, paid or unpaid, and information about your current or previous employment.
              </p>
              <p class="answer">{{$sop->mature}}</p>
            </div>



            <p class="course-header">
              International students
            </p>
            <br>
            <br>
            <div class="card">
              <p class="question">
                Tell universities why you want to study in the UK and why you think you can successfully complete a course that is taught in
                English. Say if some of your studies have been taught or examined in English and if you have taken part in any activities where
                you have used English outside of your studies.
              </p>
              <p class="answer">{{$sop->international}}</p>
            </div>



            <p class="course-header">
              Future plans
            </p>
            <br>
            <br>
            <div class="card">
              <p class="question">
                If you know what you’d like to achieve after completing the course, explain how you want to use the knowledge and experience
                that you gain. How does the course relate to what you want to do in the future?
              </p>
              <p class="answer">{{$sop->plan}}</p>
            </div>  

          </div> 
       
        </div>
      </div>
    </div>
  </section>
</body>
</html>
  

@extends('student.dashboard.dashboard')
@section('content')

<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2 class="text-primary">Questions</h2>
             </div>
          </div>
       </div>
       <div class="row">
               <div class="col-md-12 ">
        <div class="full counter_section margin_bottom_30 bg-primary " style="display: initial">

   {{-- alert message for error --}}

  <!-- The Modal -->
<div class="modal" id="myModal" style="margin-top:5%;">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Message</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p>Thank
                    <br>Your score has been sent to your E-mail.<br> thank you!!!</p>
            </div>



        </div>
    </div>
</div>

<h1 class="text-white">

{{$activities->subject->course_name}}
<span class="text-light float-right" style="font-size: 15px;">
{{$no_of_question}}
questions</span></h1>
<p class="text-light">
    {{$activities->instruction}}
    <br>
    You have
    {{$activities->duration }}
     minutes for the whole quiz and each questions carry equal mark
</p>



<span class="float-right"><h3 class="text-light " id="times">
     <div id="time">
<input type="hidden" value="
{{$activities->duration }}
" name="" id="duration">

    <span class="digit" id="min">
        00</span>
    <span class="txt">Min</span>
    <span class="digit" id="sec">
        00</span>
    <span class="txt">Sec</span>

</div> </h3></span>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 ">
             <div class="full counter_section margin_bottom_30  " style="display: initial">

                <form action="{{ route('student.activity.question.mark') }}" method="post">
                    @csrf
                    @foreach ($questions as $key => $question)
                        <div class="question-container" key='{{ $question->id }}'>
                            <label for="question{{ $question->id }}">Question {{ $key + 1 }}: {{ $question->questions }}</label><br>
                            <input type="radio" value="a" name="answers[{{ $question->id }}]"> <label>{{ ucfirst($question->opt_a) }}</label><br>
                            <input type="radio" value="b" name="answers[{{ $question->id }}]"> <label>{{ ucfirst($question->opt_b) }}</label><br>
                            <input type="radio" value="c" name="answers[{{ $question->id }}]"> <label>{{ ucfirst($question->opt_c) }}</label><br>
                            <input type="radio" value="d" name="answers[{{ $question->id }}]"> <label>{{ ucfirst($question->opt_d) }}</label><br>
                            <input type="hidden" name="correct_answers[{{ $question->id }}]" value="{{ $question->answer }}">
                        </div>
                            @error("answers[{{ $question->id }}]")
                            <p>
                                {{$message}}
                            </p>
                            @enderror

                    @endforeach

                    <input type="hidden" name="s_name" value="{{$activities->subject->course_name}}">
                    <input type="hidden" name="exam" value="{{$activities->exam}}">
                    <input type="hidden" name="s_code" value="{{$activities->s_code}}">
                    <button class="btn btn-outline-danger " onclick="previousItem()">Previous</button>
                    <button type="submit" id="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Submit</button>
                    <button class="btn btn-outline-primary" id="next" onclick="nextItem()">Next</button>

                </form>
             </div>
                    </div>
                </div>

        </div>
     </div>
    </div>




    </div>
</div>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the list of items
        const items = document.querySelectorAll('.question-container');
        document.getElementById('submit').style.display="none";
        // Index to keep track of the currently displayed item
        let currentIndex = 0;

        // Function to show the previous item
        window.previousItem = function () {
            currentIndex = (currentIndex - 1 + items.length) % items.length;

            showItem();
        }

        // Function to show the next item
        window.nextItem = function () {
            currentIndex = (currentIndex + 1) % items.length;
            if (currentIndex == items.length - 1)
            {
                document.getElementById('next').style.display="none";
                document.getElementById('submit').style.display="block";

            }
            showItem();
        }

        // Function to display the current item
        function showItem() {
            // Check if items exist
            if (items.length > 0) {
                items.forEach((item, index) => {
                    if (index === currentIndex) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            } else {
                console.error('No items found.');
            }
        }

        // Show the initial item
        showItem();
    });
</script>



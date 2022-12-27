<div id="comment_{{ $comment->comment_id }}" class="border-top d-flex justify-content-between">
    <div class="d-flex">
        <div class="d-flex align-items-center flex-column p-1">
            <button class="button-clear p-0 m-0 mr-2" type="button">
                <i class="material-symbols-outlined">keyboard_arrow_up</i>
            </button>
            <p class="m-0 pr-2 text-nowrap">{{ $comment->num_votes }}</p>
            <button class="button-clear d-block p-0 m-0 mr-2" type="button">
                <i class="material-symbols-outlined ">keyboard_arrow_down</i>
            </button>
        </div>
        <div class="pt-3">
            <p class="m-0">
                <img src="{{asset('storage/'.($comment->author->picture_path).'.jpeg')}}" class="img-fluid rounded-circle" alt="user image" width="25px">
                <a href="{{url("/users/$comment->user_id")}}"> {{ $comment->author->name }}</a>
                {{ \Carbon\Carbon::parse($comment->date)->format('d/m/Y')}}
                <button class="m-0 button button-clear p-0" type="button" data-toggle="modal" 
                    data-target="#add-report-modal-{{ $question->question_id }}-{{ $comment->answer_id }}-{{ $comment->comment_id }}">
                    <i width="16" height="16" class="material-symbols-outlined ">flag</i>
                </button>
            </p>
        <p class="card-text py-2">{{ $comment->full_text }}</p>
        </div>
    </div>
    @include('partials.admin.add_report')
</div>
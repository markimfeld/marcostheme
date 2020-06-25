// A $( document ).ready() block.
$( document ).ready(function() {

const form_comment = $('#comment');

form_comment.addClass('form-control');

const submit_comment = $('#submit');

submit_comment.addClass('btn btn-info');

const reply_title = $('#reply-title');

reply_title.addClass('card-header');

const card = $('#respond').addClass('card-body');

const form_group = $('.comment-form-comment').addClass('form-group');

});



{/* <div class="card my-4">
    <h5 class="card-header">Deja un comentario:</h5>
    <div class="card-body">
        <form>
            <div class="form-group">
                <textarea
                    class="form-control"
                    rows="3"
                ></textarea>
            </div>
            <button type="submit" class="btn btn-info">
                Comentar
            </button>
        </form>
    </div>
</div> */}
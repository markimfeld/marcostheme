// A $( document ).ready() block.
$( document ).ready(function() {

const formComment = $('#comment');

formComment.addClass('form-control rounded-0');

const submitComment = $('#submit');

submitComment.addClass('btn btn-info rounded-0');

const replyTitle = $('#reply-title');

replyTitle.addClass('card-header');

const card = $('#respond').addClass('card-body');

const formGroup = $('.comment-form-comment').addClass('form-group');

const searchForm = document.querySelector('#searchform #s');
searchForm.classList.add('form-control', 'rounded-0', 'mb-3');

const searchSubmit = document.querySelector('#searchform #searchsubmit');
searchSubmit.classList.add('btn', 'btn-info', 'btn-block', 'rounded-0');

const sidebarRightUl = document.querySelectorAll('.sidebar-right ul');

for( ul of sidebarRightUl) {
    ul.classList.add('list-group');
}

const sidebarRightCategoriesLi = document.querySelectorAll('.sidebar-right ul li');
for ( li of sidebarRightCategoriesLi) {
    li.classList.remove('cat-item'); 
    li.classList.add('list-group-item', 'rounded-0'); 
}

});

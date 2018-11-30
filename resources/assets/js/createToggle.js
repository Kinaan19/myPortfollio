$('#createToggle').click(function(){
    $('#createSection').toggleClass('hide');
    $('#createToggle').toggleClass('fa-arrow-circle-down');
    $('#createToggle').toggleClass('fa-arrow-circle-up');
});

$('#toggleCreateNavLink').click(function(){
    $('#createNavSection').toggleClass('hide');
    $('#toggleCreateNavLink').toggleClass('far fa-plus-square');
    $('#toggleCreateNavLink').toggleClass('far fa-minus-square');
});
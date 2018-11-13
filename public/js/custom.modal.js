$('#exampleModal').on('show.bs.modal',function (event){
                
    var button = $(event.relatedTarget)
    var id = button.data('myconceptid')
    var comment = button.data('mycomment')
    var criterion_1 = button.data('mycriterion1') == "1" ? true : false;
    var criterion_2 = button.data('mycriterion2') == "1" ? true : false;
    var criterion_3 = button.data('mycriterion3') == "1" ? true : false;
    var criterion_4 = button.data('mycriterion4') == "1" ? true : false;
    var criterion_5 = button.data('mycriterion5') == "1" ? true : false;
    var criterion_6 = button.data('mycriterion6') == "1" ? true : false;
    var criterion_7 = button.data('mycriterion7') == "1" ? true : false;
    var criterion_8 = button.data('mycriterion8') == "1" ? true : false;
    

    var modal = $(this)
    
    modal.find('.modal-body #concept_id').val(id);
    modal.find('.modal-body #comment').val(comment);



    
    
    modal.find('.modal-body #criterion_1').val(button.data('mycriterion1'))
    modal.find('.modal-body #criterion_1').prop('checked',criterion_1);

    modal.find('.modal-body #criterion_2').val(button.data('mycriterion2'))
    modal.find('.modal-body #criterion_2').attr('checked',criterion_2);

    modal.find('.modal-body #criterion_3').val(button.data('mycriterion3'))
    modal.find('.modal-body #criterion_3').attr('checked',criterion_3);

    modal.find('.modal-body #criterion_4').val(button.data('mycriterion4'))
    modal.find('.modal-body #criterion_4').attr('checked',criterion_4);
    modal.find('.modal-body #criterion_5').val(button.data('mycriterion5'))
    modal.find('.modal-body #criterion_5').attr('checked',criterion_5);
    modal.find('.modal-body #criterion_6').val(button.data('mycriterion6'))
    modal.find('.modal-body #criterion_6').attr('checked',criterion_6);
    modal.find('.modal-body #criterion_7').val(button.data('mycriterion7'))
    modal.find('.modal-body #criterion_7').attr('checked',criterion_7);
    modal.find('.modal-body #criterion_8').val(button.data('mycriterion8'))
    modal.find('.modal-body #criterion_8').attr('checked',criterion_8);
    })
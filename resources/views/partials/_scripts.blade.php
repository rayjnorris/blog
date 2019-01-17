

<script src="{{ asset('js/jquery-3.2.1.js') }}"></script>

<script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/mdb/js/mdb.min.js') }}"></script>
<script src="{{ asset('vendors/mdb/js/tether.min.js') }}"></script>

<!-- parsley form validation JavaScript -->

<script src="{{ asset('vendors/parsley/js/parsley.min.js') }}"></script>

<script src="{{ asset('index.js') }}"></script>

<!-- pickadate JavaScript -->

<script src="{{ asset('vendors/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('vendors/pickadate/picker.js') }}"></script>
<script src="{{ asset('vendors/pickadate/legacy.js') }}"></script>

<script type="text/javascript">
  $(function() {
    $('#datepicker').pickadate({
    	formatSubmit: 'yyyy-mm-dd',
    	hiddenName: true,
    	format: 'yyyy-mm-dd',
      editable: undefined
    })
  });
</script>

<!-- slider JavaScript  -->

<script>
$(document).ready(function(){
  $('.slider').slider({
    full_width: false,
    interval:10000,
    transition:1000
    });
});
</script>

<!--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>-->


        <script src="{{ asset('vendors/froala/js/froala_editor.min.js') }}"></script>
        <script src="{{ asset('vendors/froala/js/plugins/image.min.js') }}"></script>
        <script src="{{ asset('vendors/froala/js/plugins/quote.min.js') }}"></script>
        <script src="{{ asset('vendors/froala/js/plugins/word_paste.min.js') }}"></script>
        
        <script src="{{ asset('vendors/froala/js/plugins/code_beautifier.min.js') }}"></script>
        <script src="{{ asset('vendors/froala/js/plugins/code_view.min.js') }}"></script>
        <script src="{{ asset('vendors/froala/js/plugins/image_manager.min.js') }}"></script>
        <script src="{{ asset('vendors/froala/js/plugins/quick_insert.min.js') }}"></script>

        <script src="{{ asset('vendors/froala/js/plugins/paragraph_style.min.js') }}"></script>
        <script src="{{ asset('vendors/froala/js/plugins/colors.min.js') }}"></script>
        <script src="{{ asset('vendors/froala/js/plugins/lists.min.js') }}"></script>
        <script src="{{ asset('vendors/froala/js/plugins/table.min.js') }}"></script>

        <script src="{{ asset('vendors/froala/js/plugins/font_family.min.js') }}"></script>
        <script src="{{ asset('vendors/froala/js/plugins/font_size.min.js') }}"></script>
        <script src="{{ asset('vendors/froala/js/plugins/file.min.js') }}"></script>

        <!-- Initialize the editor. -->
        <!--<script>
            $(function() {
                $('textarea#froala-editor').froalaEditor()
            });
        </script>-->

        <<script>
          $(function() {
            $('textarea#froala-editor').froalaEditor({


            toolbarInline: true,
              imageStyles: {
                no_shadow: 'No Shadow',
                round_border_50: 'Rounded 50%',
                round_border_5: 'Rounded 5px',
                class1: 'Grey Border',
                class2: 'Fade Image',
            },
            paragraphStyles: {
                class3: 'Center Text',
                class4: 'Thin Text',
                class5: 'Padding 15',
                class6: 'Padding 30',
            },
            tableStyles: {
                no_border: 'No Borders',
              },
            charCounterCount: false,
            toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'color', 'emoticons', '-', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'indent', 'outdent', '-', 'insertImage', 'insertLink', 'insertFile', 'insertVideo', 'undo', 'redo', 'html'],
                
            });
        });
        </script>

        

<!-- <script src="{{ asset('vendors/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('vendors/tinymce/jquery.tinymce.min.js') }}"></script>

<script>   
    tinymce.init({
        selector: 'textarea.editable',
        theme: 'modern',
        min_height: 200,
        resize: true,
        menubar:false,
        plugins: 'link code image',
        image_advtab: true,
        toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code'
        
    });

</script> -->


<script>
    new WOW().init();
</script>

<script>
    $(".button-collapse").sideNav();
        
    var el = document.querySelector('.custom-scrollbar');
    Ps.initiali
</script>

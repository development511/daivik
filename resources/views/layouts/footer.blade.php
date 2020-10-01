</body>
<!-- Concatenated js plugins and jQuery -->

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{url('assets/js/app.js')}}"></script>
    
    <!-- Core js -->
    <script src="{{url('assets/data/tipuedrop_content.js')}}"></script>
    <script src="{{url('assets/js/global.js')}}"></script>
    <script src="{{url('assets/js/main.js')}}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->

<script>
    $(document).ready(function(){
    //     var date_input=$('input[name="date"]'); //our date input has the name "date"
    //     date_input.datepicker({
    //         format: 'dd-mm-yyyy',
    //         todayHighlight: true,
    //         autoclose: true,
    //     })
    // })
    // $('#date').datepicker({
    // format: 'mm/dd/yyyy',
    // startDate: '-3d'
    // });

    $('#date').datepicker({
            uiLibrary: 'bootstrap4'
        });
});
</script>






</html>
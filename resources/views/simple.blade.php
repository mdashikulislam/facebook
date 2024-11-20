<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calander</title>
    <link rel="stylesheet" href="calender/page.css">
    <link rel="stylesheet" href="calender/style.css">
    <link rel="stylesheet" href="calender/theme.css">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="viewport" content="width=device-width">
</head>
<body>
<main>
    <div class="calendar-wrapper" id="calendar-wrapper"></div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="calender/calendar.js"></script>
<!-- <script src="calendar.js"></script> -->
<script
    src="https://unpkg.com/codeflask/build/codeflask.min.js"></script>
<script type="text/javascript">
    var config = `
function selectDate(date) {
  $('#calendar-wrapper').updateCalendarOptions({
    date: date
  });
  console.log(calendar.getSelectedDate());
}

var defaultConfig = {
  weekDayLength: 1,
  date: '08/05/2021',
  onClickDate: selectDate,
  showYearDropdown: true,
  startOnMonday: false,
};

var calendar = $('#calendar-wrapper').calendar(defaultConfig);
console.log(calendar.getSelectedDate());
`;
    eval(config);
    const flask = new CodeFlask('#editor', {
        language: 'js',
        lineNumbers: true
    });
    flask.updateCode(config);
    flask.onUpdate((code) => {
        try {
            eval(code);
        } catch(e) {}
    });
</script>

</body>
</html>
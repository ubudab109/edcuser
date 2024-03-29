var form = $("#form");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
});
form.children("div").steps({
    bodyTag: "div",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
});

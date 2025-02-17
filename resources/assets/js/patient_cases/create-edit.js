document.addEventListener('turbo:load', loadPatientCaseData)
function loadPatientCaseData() {
    if (
        !$("#createPatientCaseForm").length &&
        !$("#editPatientCaseForm").length
    ) {
        return;
    }

    $("#casePatientId, #caseDoctorId").select2({
        width: "100%",
    });

    $('#caseDate').flatpickr({
        enableTime: true,
        defaultDate: new Date(),
        dateFormat: "Y-m-d H:i",
        locale : $('.userCurrentLanguage').val(),
    });
    $("#casePatientId").focus();

    $(".price-input").trigger("input");
}

listenSubmit("#createPatientCaseForm, #editPatientCaseForm", function () {
    $("#saveCaseBtn").attr("disabled", true);

    if ($(".error-msg").text() !== "") {
        $(".phoneNumber").focus();
        $("#saveCaseBtn").attr("disabled", false);
        return false;
    }
});

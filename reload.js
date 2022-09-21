$("#buttonReload").click(function () {
    try {resetPage();
        if ($('#formProperty').valid()) {$.ajax({
    cache: false,
    type: 'POST',
    url: '/Property/ManualRefresh',
    timeout: 120000,
    data: $("#formProperty").serialize(),
    dataType: "json",
    beforeSend: function (oXhr) {
    $("#divLoading").removeClass("hidden");
    console.log("Sending ....")
    },success: function (oResponse, sStatus, oXhr) {
    $("#divLoading").addClass("hidden");
    if (oXhr.status == 302) {
    console.log("OK: " + oResponse.id);
    window.location.replace("/Tools/Diligence/12345?message=Page%20Reloaded");
    } else { //invalid
    console.log("... Error: " + oXhr.responseText)
    showError(oXhr.responseText);
    Sentry.captureException(JSON.stringify(oXhr));
    }
    },
    error: function (oXhr, sError, oErr) {
    $("#divLoading").addClass("hidden");
    console.log("... Error: " + oXhr.responseText)
    showError(oXhr.responseText);
    Logger.captureException(JSON.stringify(oErr));
    }
    });
    return false;
    } else {
    console.log("... Failed Validation ...")
    showError('Failed Validation, please check the form below');
    }
    } catch (ex) {
    Logger.captureException(JSON.stringify(ex));
    }}); //buttonReload
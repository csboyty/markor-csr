function Mgr(ownTable) {
    this.ownTable = ownTable();
}
Mgr.prototype.tableRedraw = function () {
    this.ownTable.fnSettings()._iDisplayStart = 0;
    this.ownTable.fnDraw();
};
Mgr.prototype.delete = function (id) {
    functions.showLoading();
    var me = this;
    $.ajax({
        url: config.ajaxUrls.postDelete + "?id=" + id,
        type: "post",
        dataType: "json",
        success: function (response) {
            if (response.success) {
                $().toastmessage("showSuccessToast", config.messages.optSuccess);
                me.ownTable.fnDraw();
                functions.hideLoading();
            } else {
                functions.ajaxReturnErrorHandler(response.error_code);
            }

        },
        error: function () {
            functions.ajaxErrorHandler();
        }
    });
};
Mgr.prototype.published = function (id, value) {
    functions.showLoading();
    $.ajax({
        url: config.ajaxUrls.postPublished + "?id=" + id + "&published=" + value,
        type: "post",
        dataType: "json",
        success: function (response) {
            if (response.success) {
                $().toastmessage("showSuccessToast", config.messages.optSuccess);
                functions.hideLoading();
            } else {
                functions.ajaxReturnErrorHandler(response.error_code);
            }

        },
        error: function () {
            functions.ajaxErrorHandler();
        }
    });
};
Mgr.prototype.initFunc=function(){
    $("#searchBtn").click(function(){
        Mgr.prototype.tableRedraw();
    });

    $("#myTable").on("click","a.delete",function(){
        if(confirm(config.messages.confirmDelete)){
            Mgr.prototype.delete($(this).attr("href"));
        }
        return false;
    }).on("change",".published",function(){
            Mgr.prototype.published($(this).data("id"),$(this).val());
        })
};

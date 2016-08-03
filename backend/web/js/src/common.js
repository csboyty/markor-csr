function Mgr(ownTable) {
    this.ownTable = ownTable();
    this.say="hello";
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
Mgr.prototype.initFunc=function(){
    var me=this;
    $("#searchBtn").click(function(){
        me.tableRedraw();
    });

    $("#myTable").on("click","a.delete",function(){
        if(confirm(config.messages.confirmDelete)){
            me.delete($(this).attr("href"));
        }
        return false;
    });
};

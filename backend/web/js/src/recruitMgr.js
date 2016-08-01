var recruitMgr=(function(config,functions){
    /**
     * 创建datatable
     * @returns {*|jQuery}
     */
    function createTable(){

        var ownTable=$("#myTable").dataTable({
            "bServerSide": true,
            "sAjaxSource": config.ajaxUrls.recruitGetAll,
            "bInfo":true,
            "bProcessing":true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort":false,
            "bAutoWidth": false,
            "iDisplayLength":config.perLoadCounts.table,
            "sPaginationType":"full_numbers",
            "oLanguage": {
                "sUrl":config.dataTable.langUrl
            },
            "aoColumns": [
                { "mDataProp": "job"},
                { "mDataProp": "date"},
                { "mDataProp": "published",
                    "fnRender":function(oObj){
                        var string="<select class='published' data-id='"+oObj.aData.id+"'>";

                        if(oObj.aData.published==0){
                            string+="<option value='0' selected>"+config.status.published[0]+"</option>" +
                                "<option value='1'>"+config.status.published[1]+"</option>";
                        }else{
                            string+="<option value='0'>"+config.status.published[0]+"</option>" +
                                "<option value='1' selected>"+config.status.published[1]+"</option>";
                        }

                        string+="</select>";

                        return string;
                    }
                },
                { "mDataProp": "opt",
                    "fnRender":function(oObj){
                        return '<a href="recruit/update?id='+oObj.aData.id+'">修改</a>&nbsp;' +
                            '<a class="delete" href="'+oObj.aData.id+'">删除</a>';
                    }
                }
            ] ,
            "fnServerParams": function ( aoData ) {
                aoData.push({
                    name:"filter",
                    value:$("#filter").val()?"published="+$("#filter").val():""
                })
            },
            "fnServerData": function(sSource, aoData, fnCallback) {

                //回调函数
                $.ajax({
                    "dataType":'json',
                    "type":"get",
                    "url":sSource,
                    "data":aoData,
                    "success": function (response) {
                        if(response.success===false){
                            functions.ajaxReturnErrorHandler(response.error_code);
                        }else{
                            var json = {
                                "sEcho" : response.sEcho
                            };

                            for (var i = 0, iLen = response.aaData.length; i < iLen; i++) {
                                response.aaData[i].opt="opt";
                            }

                            json.aaData=response.aaData;
                            json.iTotalRecords = response.iTotalRecords;
                            json.iTotalDisplayRecords = response.iTotalDisplayRecords;
                            fnCallback(json);
                        }

                    }
                });
            },
            "fnFormatNumber":function(iIn){
                return iIn;
            }
        });

        return ownTable;
    }

    return {
        ownTable:null,
        createTable:function(){
            this.ownTable=createTable();
        },
        tableRedraw:function(){
            this.ownTable.fnSettings()._iDisplayStart=0;
            this.ownTable.fnDraw();
        },
        delete:function(id){
            functions.showLoading();
            var me=this;
            $.ajax({
                url:config.ajaxUrls.recruitDelete+"?id="+id,
                type:"post",
                dataType:"json",
                success:function(response){
                    if(response.success){
                        $().toastmessage("showSuccessToast",config.messages.optSuccess);
                        me.ownTable.fnDraw();
                        functions.hideLoading();
                    }else{
                        functions.ajaxReturnErrorHandler(response.error_code);
                    }

                },
                error:function(){
                    functions.ajaxErrorHandler();
                }
            });
        },
        published:function(id,value){
            functions.showLoading();
            $.ajax({
                url: config.ajaxUrls.recruitPublished + "?id=" + id + "&published=" + value,
                type: "post",
                dataType: "json",
                success: function (response) {
                    if (response.success) {
                        $().toastmessage("showSuccessToast", config.messages.optSuccess);
                        functions.hideLoading();
                    } else {
                        functions.ajaxReturnErrorHandler(response.message);
                    }

                },
                error: function () {
                    functions.ajaxErrorHandler();
                }
            });
        }
    }
})(config,functions);

$(document).ready(function(){

    recruitMgr.createTable();

    $("#searchBtn").click(function(){
        recruitMgr.tableRedraw();
    });
    $("#myTable").on("click","a.delete",function(){
        if(confirm(config.messages.confirmDelete)){
            recruitMgr.delete($(this).attr("href"));
        }
        return false;
    }).on("change",".published",function(){
            recruitMgr.published($(this).data("id"),$(this).val());
        })
});

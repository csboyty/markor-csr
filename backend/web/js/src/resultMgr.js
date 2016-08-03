$(document).ready(function(){

    var mgr=new Mgr(function createTable(){

            var ownTable=$("#myTable").dataTable({
                "bServerSide": true,
                "sAjaxSource": config.ajaxUrls.postGetAll,
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
                    { "mDataProp": "thumb",
                        "fnRender":function(oObj){
                            return '<img class="thumb" src="'+oObj.aData.thumb+'">';
                        }
                    },
                    { "mDataProp":"title" },
                    { "mDataProp": "published",
                        "fnRender":function(oObj){
                            return config.status.published[oObj.aData.published];
                        }
                    },
                    { "mDataProp": "opt",
                        "fnRender":function(oObj){
                            return '<a href="result/update?id='+oObj.aData.id+'">修改</a>&nbsp;' +
                                '<a class="delete" href="'+oObj.aData.id+'">删除</a>';
                        }
                    }
                ] ,
                "fnServerParams": function ( aoData ) {
                    aoData.push({
                        name:"category",
                        value:category_id
                    },{
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
    );

    mgr.initFunc();
});


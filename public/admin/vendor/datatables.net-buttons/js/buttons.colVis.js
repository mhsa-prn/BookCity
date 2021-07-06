!function(e){"function"==typeof define&&define.amd?define(["jquery","datatables.net","datatables.net-buttons"],function(n){return e(n,window,document)}):"object"==typeof exports?module.exports=function(n,t){return n||(n=window),t&&t.fn.dataTable||(t=require("datatables.net")(n,t).$),t.fn.dataTable.Buttons||require("datatables.net-buttons")(n,t),e(t,n,n.document)}:e(jQuery,window,document)}(function(n,t,e,u){"use strict";var o=n.fn.dataTable;return n.extend(o.ext.buttons,{colvis:function(n,t){return{extend:"collection",text:function(n){return n.i18n("buttons.colvis","Column visibility")},className:"buttons-colvis",buttons:[{extend:"columnsToggle",columns:t.columns,columnText:t.columnText}]}},columnsToggle:function(n,t){return n.columns(t.columns).indexes().map(function(n){return{extend:"columnToggle",columns:n,columnText:t.columnText}}).toArray()},columnToggle:function(n,t){return{extend:"columnVisibility",columns:t.columns,columnText:t.columnText}},columnsVisibility:function(n,t){return n.columns(t.columns).indexes().map(function(n){return{extend:"columnVisibility",columns:n,visibility:t.visibility,columnText:t.columnText}}).toArray()},columnVisibility:{columns:u,text:function(n,t,e){return e._columnText(n,e)},className:"buttons-columnVisibility",action:function(n,t,e,o){var i=t.columns(o.columns),l=i.visible();i.visible(o.visibility!==u?o.visibility:!(l.length&&l[0]))},init:function(i,n,l){var u=this;i.on("column-visibility.dt"+l.namespace,function(n,t){t.bDestroying||t.nTable!=i.settings()[0].nTable||u.active(i.column(l.columns).visible())}).on("column-reorder.dt"+l.namespace,function(n,t,e){if(1===i.columns(l.columns).count()){"number"==typeof l.columns&&(l.columns=e.mapping[l.columns]);var o=i.column(l.columns);u.text(l._columnText(i,l)),u.active(o.visible())}}),this.active(i.column(l.columns).visible())},destroy:function(n,t,e){n.off("column-visibility.dt"+e.namespace).off("column-reorder.dt"+e.namespace)},_columnText:function(n,t){var e=n.column(t.columns).index(),o=n.settings()[0].aoColumns[e].sTitle.replace(/\n/g," ").replace(/<br\s*\/?>/gi," ").replace(/<select(.*?)<\/select>/g,"").replace(/<.*?>/g,"").replace(/^\s+|\s+$/g,"");return t.columnText?t.columnText(n,e,o):o}},colvisRestore:{className:"buttons-colvisRestore",text:function(n){return n.i18n("buttons.colvisRestore","Restore visibility")},init:function(t,n,e){e._visOriginal=t.columns().indexes().map(function(n){return t.column(n).visible()}).toArray()},action:function(n,e,t,o){e.columns().every(function(n){var t=e.colReorder&&e.colReorder.transpose?e.colReorder.transpose(n,"toOriginal"):n;this.visible(o._visOriginal[t])})}},colvisGroup:{className:"buttons-colvisGroup",action:function(n,t,e,o){t.columns(o.show).visible(!0,!1),t.columns(o.hide).visible(!1,!1),t.columns.adjust()},show:[],hide:[]}}),o.Buttons});
CKEDITOR.dialog.add("bgImageDialog",function(b){return{title:b.lang.bgimage.bgImageTitle,resizable:CKEDITOR.DIALOG_RESIZE_BOTH,minWidth:500,minHeight:200,onOk:function(){contents=b.document.getBody().getHtml();(matches=contents.match(/<div style="(.*)">((.|\n)*?)<\/div>/))&&(contents=matches[2]);var a=this.getValueOf("tab1","imageURL"),c=this.getValueOf("tab1","repeat"),d=this.getValueOf("tab1","pos"),e=this.getValueOf("tab1","blend"),f=this.getValueOf("tab1","attachment"),g=this.getValueOf("tab1",
"width"),h=this.getValueOf("tab1","height"),a='\x3cdiv class\x3d"AA" style\x3d"'+("background-image:url("+a+");")+("background-repeat:"+c+";"),a=a+("background-position:"+d+";"),a=a+("background-blend-mode:"+e+";"),a=a+("background-attachment:"+f+";"),a=a+("background-size:"+g+" "+h+";"),a=a+'"\x3e',a=a+contents,a=a+"\x3c/div\x3e";b.setData(a)},contents:[{id:"tab1",label:b.lang.bgimage.bgImageTitle,title:b.lang.bgimage.bgImageTitle,accessKey:"Q",elements:[{type:"vbox",padding:0,children:[{type:"hbox",
widths:["280px","100px;vertical-align: middle;"],align:"right",styles:"",children:[{type:"text",label:b.lang.bgimage.imageUrl,id:"imageURL"},{type:"button",id:"browse",label:b.lang.common.browseServer,hidden:!0,filebrowser:"tab1:imageURL"}]}]},{type:"vbox",padding:0,children:[{type:"hbox",widths:["150px","150px"],align:"right",children:[{type:"select",id:"repeat",label:b.lang.bgimage.repeat,items:[["repeat"],["no-repeat"],["repeat-x"],["repeat-y"]],"default":"repeat"},{type:"select",id:"attachment",
label:b.lang.bgimage.attachment,items:[["scroll"],["fixed"],["local"]]}]}]},{type:"vbox",padding:0,children:[{type:"hbox",widths:["150px","150px"],align:"right",children:[{type:"select",id:"blend",label:b.lang.bgimage.blendMode,items:[["normal"],["multiply"],["screen"],["overlay"],["darken"],["lighten"],["color-dodge"],["saturation"],["color"],["luminosity"]],style:"float:left","default":"normal"},{type:"select",label:b.lang.bgimage.position,id:"pos",align:"right",items:[["left top"],["left center"],
["left bottom"],["right top"],["right center"],["center top"],["center center"],["center center"]],"default":"left top"}]}]},{type:"vbox",padding:0,children:[{type:"hbox",widths:["150px","150px"],align:"right",children:[{type:"select",id:"repeat",label:b.lang.bgimage.repeat,items:[["repeat"],["no-repeat"],["repeat-x"],["repeat-y"]],"default":"repeat"},{type:"select",id:"attachment",label:b.lang.bgimage.attachment,items:[["scroll"],["fixed"],["local"]]}]}]},{type:"vbox",padding:0,children:[{type:"hbox",
widths:["150px","150px"],align:"right",children:[{type:"text",id:"width",label:b.lang.bgimage.bgWidth,width:"50px"},{type:"text",label:b.lang.bgimage.bgHeight,id:"height",align:"right",width:"50px"}]}]}]}]}});

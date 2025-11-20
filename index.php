<?php
// Gagnez du temps grâce à la conversion automatique JSON ⇄ PHP Array ⇄ SQL Converter
// Save time with automatic JSON ⇄ PHP Array ⇄ SQL Converter conversion
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JSON ⇄ PHP Array ⇄ SQL Converter</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col items-center py-10 font-sans">

<div class="w-full max-w-2xl p-6 bg-gray-800 rounded-xl shadow-xl">
  <h1 class="text-3xl font-bold mb-4 text-center">🔄 JSON ⇄ PHP Array ⇄ SQL</h1>
  <p class="text-gray-300 mb-6 text-center">Collez votre JSON pour générer un Array PHP ou un INSERT SQL automatiquement</p>

  <label class="block font-semibold mb-2">JSON Input :</label>
  <textarea id="jsonInput" class="w-full h-32 p-3 rounded bg-gray-700 text-white outline-none focus:ring-2 focus:ring-blue-500" placeholder='{"name":"Alice","email":"alice@example.com","age":25}'></textarea>

  <div class="flex flex-wrap gap-2 mt-4">
    <button onclick="convertPHP()" class="bg-green-600 hover:bg-green-700 transition p-3 rounded-lg font-semibold flex-1">Generate PHP Array</button>
    <button onclick="convertSQL()" class="bg-blue-600 hover:bg-blue-700 transition p-3 rounded-lg font-semibold flex-1">Generate SQL INSERT</button>
  </div>

  <div id="outputBox" class="hidden mt-6">
    <label class="block font-semibold mb-2">Output :</label>
    <textarea id="output" class="w-full h-36 p-3 rounded bg-gray-700 text-white outline-none focus:ring-2 focus:ring-green-500"></textarea>
    <button class="mt-3 w-full bg-yellow-600 hover:bg-yellow-700 transition p-3 rounded-lg font-semibold" data-clipboard-target="#output" id="copyBtn">Copy <i class="fa-solid fa-copy"></i></button>
  </div>
</div>

<script>
const _0x5c1ac4=_0x115f;(function(_0x50c372,_0x2312c0){const _0x5a1cd4=_0x115f,_0x308502=_0x50c372();while(!![]){try{const _0x5266a8=-parseInt(_0x5a1cd4(0xdc))/0x1*(parseInt(_0x5a1cd4(0xe3))/0x2)+-parseInt(_0x5a1cd4(0xdd))/0x3*(parseInt(_0x5a1cd4(0xc9))/0x4)+-parseInt(_0x5a1cd4(0xe0))/0x5*(-parseInt(_0x5a1cd4(0xd6))/0x6)+-parseInt(_0x5a1cd4(0xc6))/0x7+parseInt(_0x5a1cd4(0xda))/0x8*(parseInt(_0x5a1cd4(0xc7))/0x9)+-parseInt(_0x5a1cd4(0xde))/0xa+-parseInt(_0x5a1cd4(0xcb))/0xb*(-parseInt(_0x5a1cd4(0xd3))/0xc);if(_0x5266a8===_0x2312c0)break;else _0x308502['push'](_0x308502['shift']());}catch(_0x10de06){_0x308502['push'](_0x308502['shift']());}}}(_0x4682,0xe0a93));function convertPHP(){const _0x2a28ae=_0x115f;let _0x20701d=document[_0x2a28ae(0xce)](_0x2a28ae(0xe2))[_0x2a28ae(0xd5)][_0x2a28ae(0xc8)]();if(!_0x20701d)return alert(_0x2a28ae(0xd8));try{const _0x5f8f68=JSON['parse'](_0x20701d);let _0x3eab23=arrayToPHP(_0x5f8f68);document[_0x2a28ae(0xce)](_0x2a28ae(0xdf))[_0x2a28ae(0xd5)]=_0x3eab23,document[_0x2a28ae(0xce)](_0x2a28ae(0xca))[_0x2a28ae(0xd7)][_0x2a28ae(0xd2)](_0x2a28ae(0xe5));}catch(_0x55056f){alert(_0x2a28ae(0xcc));}}function convertSQL(){const _0x227d40=_0x115f;let _0x6d53fd=document['getElementById'](_0x227d40(0xe2))[_0x227d40(0xd5)][_0x227d40(0xc8)]();if(!_0x6d53fd)return alert(_0x227d40(0xd8));try{const _0x543b1e=JSON[_0x227d40(0xd0)](_0x6d53fd);let _0x5cb7db=arrayToSQL(_0x543b1e);document['getElementById'](_0x227d40(0xdf))[_0x227d40(0xd5)]=_0x5cb7db,document[_0x227d40(0xce)](_0x227d40(0xca))[_0x227d40(0xd7)][_0x227d40(0xd2)](_0x227d40(0xe5));}catch(_0x2e2092){alert(_0x227d40(0xcc));}}function _0x115f(_0x5434ac,_0x23c1b1){const _0x4682ba=_0x4682();return _0x115f=function(_0x115fd4,_0xe4adf3){_0x115fd4=_0x115fd4-0xc3;let _0x4476da=_0x4682ba[_0x115fd4];return _0x4476da;},_0x115f(_0x5434ac,_0x23c1b1);}function _0x4682(){const _0x1e1b89=['88cxwooT','null','545001FXhbyD','251358AkmnZQ','4436840RtWplg','output','7220DFzMkL','Table\x20name\x20for\x20INSERT\x20SQL:','jsonInput','6naXKEI','string','hidden','map','replace','my_table','join','7595560LiFZuM','1072728AmdlBI','trim','4VgTDiA','outputBox','22epyPUm','Invalid\x20JSON.\x20Check\x20syntax.','\x27\x20=>\x20','getElementById','NULL','parse',')\x20VALUES\x20(','remove','14895936itfwkj','\x20\x20\x20\x20\x27','value','1554NqDfIf','classList','Please\x20paste\x20some\x20JSON.','#copyBtn'];_0x4682=function(){return _0x1e1b89;};return _0x4682();}function arrayToPHP(_0x27b91f){const _0x4fb41b=_0x115f;let _0x592e89='array(\x0a';for(let _0x28a1ad in _0x27b91f){let _0x327f56=_0x27b91f[_0x28a1ad];if(typeof _0x327f56===_0x4fb41b(0xe4))_0x327f56='\x27'+_0x327f56[_0x4fb41b(0xc3)](/'/g,'\x5c\x27')+'\x27';else{if(_0x327f56===null)_0x327f56=_0x4fb41b(0xdb);}_0x592e89+=_0x4fb41b(0xd4)+_0x28a1ad+_0x4fb41b(0xcd)+_0x327f56+',\x0a';}return _0x592e89+=');',_0x592e89;}function arrayToSQL(_0x50df0a){const _0x51a74f=_0x115f;let _0x49cfc5=prompt(_0x51a74f(0xe1),_0x51a74f(0xc4))||'my_table',_0x3ce8ed=Object['keys'](_0x50df0a)[_0x51a74f(0xe6)](_0xf1a3dd=>'`'+_0xf1a3dd+'`')[_0x51a74f(0xc5)](',\x20'),_0x4a246d=Object['values'](_0x50df0a)['map'](_0x4d0f2a=>typeof _0x4d0f2a==='string'?'\x27'+_0x4d0f2a[_0x51a74f(0xc3)](/'/g,'\x5c\x27')+'\x27':_0x4d0f2a===null?_0x51a74f(0xcf):_0x4d0f2a)[_0x51a74f(0xc5)](',\x20');return'INSERT\x20INTO\x20'+_0x49cfc5+'\x20('+_0x3ce8ed+_0x51a74f(0xd1)+_0x4a246d+');';}new ClipboardJS(_0x5c1ac4(0xd9));
</script>
</body>
</html>

var quotes = [
"1d3026e7d5eeddd578",
"e15de8ac1f4b779cd2",
"bc7b098bd756f942b6",
"a1190d7c6838a2c8df",
"37971487688defdcf5",
"3b2609fcef6c213333",
"b75b5a8edb3c49e8b6",
"d3d9d39d50f59afda3",
"b2589653322f121f06",
"d374c457cd5f07bcbd",
"d9c8ce129c8d3d6e84",
"37fd5003c5eab70622",
"37fd5003c5eab70622",
"a084828c74720211ea",
"98b0d9fd56b526a42d",
"a6f66802c5d2837297",
"7f1e1e6fc6d83e1120",
"820b779532504bee53",
'2dcc223ad0905da15d',
'da7e7fd203ba6f5ca2',
'ab1c2d931889e51a22',
'52d3b396cb373ae15f',
'e102382a158a2b15c2',
'207d3f02d090065177',
'88e4cfc49ff98a4207',
'2143e6ac250e00cf1e',
'a477f26f8a92c6e6ca',
'47335944cf7bbebd67',
'832a2f5ca5e90c0f39',
'8f3bd7e347828b00ed',
'0a090f73c3f5ba05a0',
'784ad7254d32bfe14a',
'7ad444d3b03f707548',
'84c0dfe9b64891849f',
'ebd5c5cf52979d4608',
'425780b52a479bf23a',
'b4607c309141d6ad1b',
'e54d1294fdf34bdb32',
'b9fb7de0d998ec5238',
'97422e1fec97473ab5',
'4395665d66099f6bda',
'5e64289a6798f31579',
'90b39322f09879d8eb',
'169d7dc0756f955ec1',
'0b798330f91b5e935b',
'fcf74c8ddb56db4152',
'395262a3b8b5aaf961',
'4e78aa82c5100b2514',
'97a5635c5a06ec8be6',
'681dcdde0cc2b3264d',
'962388bf485ec05c2d',
'0e773378796eaacfa3',
'2c515c521cf5a6a7e8',
'a906625b2142e7db8f',
'7d57e9031633dbda97',
'aad8070d9dec25e208',
'50ccf573a9cb78e881',
'b2609b03160058d3a9',
'684d5e55b3fc336253',
'cf441291a562b223d2',
'e9ac2fce1c158cbdda',
'bcffca993fe458135c',
'9aafc65b13d53dda3c',
'a2b648968c8afc252b',
'5129da54182b36c54a',
'cef2ca7233f5fa6944',
'991a52d9b3fe508541',
'953a17185e4fb5c76f',
'a80dae53f2dece83b9',
'c098bcbbef1e0b8754',
'5d05163744189e6896',
'772ceda4042383e304',
'08cbee4945cec8edca',
'572934fb08a58d0d27',
'707c86c1e127e74c47',
'eb7a9fd5f3c112ee26',
'd505098fa42e9c66dd',
'8a5c05bbbf5cfd7a35',
'ded9188d6ba7850953',
'aa20421476f2889aab',
'6ea7b41afb59658299',
'586b573acd5cf95fd2',
'c21f27f21b6eb8e225',
'2a3a03102f3a684308',
'f16d266ea00a6c2c75',
'581cafd0459b02b40a',
'120a14ed75f8d9ee2a',
'72d76c4bfa01a347ee',
'827276f2257e80d901',
'fd6f1c7581892101c8',
'0626e5c72fc02ea3d4',
'08db04fa4d642f82e4',
'7a8bce63f80a88061c',
'c7c0cc5c9c63b0239d',
'356a7c9ae2d6063a31',
'f30c86156694ea9411',
'642f4dec4a9faa60e1',
'f1e7e88762fe880008',
'f618f834cbc9a201a0',
'973932dc4fa2d57f6f'

]
function newQuotes() {
    var randomNumber = Math.floor(Math.random() * (quotes.length));
    document.getElementById('keyDisplay').innerHTML = quotes[randomNumber];

}

    



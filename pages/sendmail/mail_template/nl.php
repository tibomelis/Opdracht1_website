<?php
function getLangTemplate($fname, $lname, $email, $phone, $sumry)
{
    $randomnames = [
        'Tibo',
        'Pat',
        'Alex',
        'Jody',
        'Robin',
        'Nico',
        'Jo'
    ];
    $randint = random_int(0, sizeof($randomnames) - 1);
    $randomname = $randomnames[$randint];
    return "
<body style='color: #000000;'>
    <div align='center' style='border: #e5e5e5 1px solid; background-color: #fafafa;'>
        <div style='padding: 10px;border: #e5e5e5 1px solid;border-radius: 10px;background-color: #f6f6f6; align-self: center; width: fit-content; display: flex;'>
            <img src='https://i.imgur.com/75kLPwU.png' style='border: #656565 1px solid; width: 100px;height: 100px; margin: 25px'>
            <div>
                <h1 style='color: #000000;'>Bedankt dat je contact met ons hebt opgenomen $fname!</h1>
                <p style='color: #000000;' align='left'>Samenvatting: $sumry</p>
                <p style='color: #000000;' align='left'>Bent u dit niet: $email? Of heeft u deze mail ontvangen maar niet aangevraagd? Dan kunt u deze mail verwijderen.</p>
            </div>
        </div>
    
        <p style='color: #000000; text-align: center; padding: 25px;'>Wij hebben uw contact inzending ontvangen!</p>
    
        <div style='padding: 10px;border: #e5e5e5 1px solid;border-radius: 10px;background-color: #f6f6f6; align-self: center; width: fit-content; display: flex;'>
            <img style='margin: auto;width: 70px; height: 70px; border-radius: 10rem; border-color: #af0917 #7a060e; border-style: solid; border-width: 5px;' src='https://thispersondoesnotexist.com/image' alt='pfp'>
    
            <div style='padding: 0 25px;'>
                <h2 style='color: #7a060e; text-align: center; margin-left: 10px;'>Ik ben hier om u te helpen!</h2>
                <p style='text-align: center'>$randomname zal u zo spoedig mogelijk helpen.</p>
            </div>
        </div>
    
        <h1>Tijdens het wachten</h1>
        <div style='padding: 10px;border: #e5e5e5 1px solid;border-radius: 10px;background-color: #f6f6f6; align-self: center; width: fit-content;'>
            <p style='color: #000000;'>Klopt deze informatie? Zo niet, dan kunt u op deze mail reageren met de correcte informatie</p>
            <table style='padding: 10px;border: #e5e5e5 1px solid;border-radius: 10px;background-color: #f6f6f6; align-self: center; width: fit-content; display: flex; position: relative;'>
                <tr>
                    <td style='text-align: left;'>Naam: </td>
                    <td style='text-align: left;'>$fname $lname</td>
                </tr>
                <tr>
                    <td style='text-align: left;'>Telefoonnummer: </td>
                    <td style='text-align: left;'>$phone</td>
                </tr>
                <tr>
                    <td style='text-align: left;'>Korte samenvatting voor contact: </td>
                    <td style='text-align: left;'>$sumry</td>
                </tr>
            </table>
        </div>
    </div>
</body>
    ";
}
<?php
function getTemplate($summ, $name, $phonenr)
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
    return
        "
<div style='border: #e5e5e5 1px solid; background-color: #fafafa;'>
    <div align='center'>
        <div style='padding: 10px; border: #e5e5e5 1px solid; border-radius: 10px; background-color: #f6f6f6; align-self: center; width: fit-content; display: flex;'>
            <img src='https://i.imgur.com/75kLPwU.png' alt='logo' style='border: #656565 1px solid; width: 100px;height: 100px; margin: 25px'>
            <div style='padding: 10px;'>
                <h1>Thanks for reaching out to us $name!</h1>
                <p align='left'>Summary: $summ</p>
            </div>
        </div>
    </div>
    <p style='text-align: center; padding: 25px;'>We have recieved your contact request!</p>
    <div align='center'>
        <div align='center' style='padding: 10px; border: #e5e5e5 1px solid; border-radius: 10px; background-color: #f6f6f6; align-self: center; width: fit-content; display: flex;'>
            <img style='width: 75px; height: 75px; border-radius: 10rem; border: 5px solid #af0917; align-self: center;' src='https://thispersondoesnotexist.com/image' alt='pfp'>
            <div style='padding: 0 25px;'>
                <h2 style='color: #7a060e; text-align: center; margin-left: 10px;'>I'm here to help!</h2>   
                <p style='text-align: center'>$randomname will help you as soon as possible</p>
            </div>
        </div>
        <h1>While you're waiting</h1>
        <h3>Is this information correct?</h3>
        <p>If not, you can reply to this mail and correct the information</p>
        <div align='center'>
            <div style='padding: 10px; border: #e5e5e5 1px solid; border-radius: 10px; background-color: #f6f6f6; align-self: center; width: fit-content; display: flex;'>
                <table>
                    <thead>
                        Your Contact information
                    </thead>
                    <tbody>
                        <tr>
                            <td>Name: </td>
                            <td>$name</td>
                        </tr>
                        <tr>
                            <td>Phone number: </td>
                            <td>$phonenr</td>
                        </tr>
                        <tr>
                            <td>Short reason for contact: </td>
                            <td>$summ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
}

//to see the template
echo getTemplate('test', 'Tibo Melis', '0123456789');
?>


<!DOCTYPE html>
<html>

<head>
    <title>Sotheby's International Reality
    </title>
</head>
<style>
    *{
        margin: 0;
    }
</style>
<body>
    <div style="">
        <div style="text-align: center; color: black; padding: 25px">
            <h1>Wedding Vault</h1>
        </div>
        <div style="text-decoration: underline; text-align: center; color: black; padding: 25px; font-size: 30px">
            {{$client->bride}} & {{$client->groom}}
        </div>
        <div style="text-align: center; color: black; padding: 25px; font-size: 20px;">
            Date: {{$client->date}} <br>
            Location: {{$client->location}} <br>
            Bride: {{$client->bride}} <br>
            Groom: {{$client->groom}} <br>
            Email: {{$client->email}} <br>

            <br> <br>
            <p>We joyously gather here today to celebrate the union of two souls, <b>Vannesa Mae</b> and <b>Acejoy</b>, as they embark on their journey of love and togetherness. Surrounded by the warmth of family and friends, their hearts unite in a bond that knows no bounds. As they exchange their vows, promising to stand by each other through thick and thin, we witness the birth of a lifelong partnership filled with laughter, love, and endless adventures. May their love continue to grow with each passing day, and may they find strength and solace in one another. Here's to a future of endless possibilities and shared happiness. Congratulations, Vannesa Mae and Acejoy, on this beautiful beginning!

                Best wishes,
                <br> <br> <br>
                ______________ <br>
                Your Signature</p>
        </div>
    </div>

    {{-- <div style="margin: 20px; font-size: 20px;">
        <div style="margin-bottom: 20px">
            <b>Email:</b> {{$client->email }}
        </div>
        <div style="margin-bottom: 20px">
            <b>Property Name:</b> {{$client->property_name }}
        </div>
        <div style="margin-bottom: 20px">
            <b>Location:</b> {{$client->location}}
        </div>
        <div style="margin-bottom: 20px">
            <b>Size:</b> {{$client->size}}
        </div>
        <div style="margin-bottom: 20px">
            <b>Bedrooms:</b> {{$client->bedrooms}}
        </div>
        <div style="margin-bottom: 20px">
            <b>Price:</b> {{$client->price}}
        </div>
        <div style="margin-bottom: 20px">
            <b>Description:</b> {{$client->description}}
        </div>


    </div> --}}

</body>
</html>

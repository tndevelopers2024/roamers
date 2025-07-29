<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ooty Travel Package</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Manrope', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: rgb(255, 255, 255);
        }

        .card {
            width: 600px;
            overflow: visible;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            border: 2px solid;

            border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);

            border-radius: 30px;
            border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
        }

        .card-image {
            width: 100%;
            height: 380px;
            overflow: hidden;
            position: relative;
            border-radius: 24px;
        }

        .card-image img {
            width: 100%;
            height: 95%;
            object-fit: cover;
            padding: 5px;
            border-radius: 30px;
        }

        .card-content {
            /* background: linear-gradient(180deg, #FFFFFF 0%, #56C3DD 100%); */
            background: linear-gradient(180deg, rgba(86, 195, 221, 0) 0%, #56C3DD 100%);
            /* border: 2px solid; */
            /* border-image-source: linear-gradient(193.16deg, #FFFFFF 9.46%, #32EEE7 90.51%); */
            padding: 1px 1px 8px 1px;
            color: rgb(255, 255, 255);
            position: relative;
            z-index: 1;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: visible;
            border-radius: 30px;
        }

        .trip-duration {
            display: flex;
            align-items: center;
            background-color: #FFFFFF;
            color: #292929;
            padding: 5px 15px;
            border-radius: 30px;
            /* position: absolute;
            top: 20px;
            left: 20px; */
            font-size: 14px;
            font-weight: bold;
        }

        .trip-duration .icon {
            margin-right: 5px;
            color: #7dd3e7;
        }

        .ex-from {
            /* position: absolute;
            top: 20px;
            right: 20px; */
            font-size: 18px;
            background-color: #FFFFFF;
            color: #292929;
            padding: 5px 15px;
            border-radius: 30px;

        }

        .title {
            font-size: 24px;
            font-weight: bold;
            /* margin-top: 57px; */
            text-transform: uppercase;
        }

        .locations {
            font-size: 16px;
            color: white;
            /* margin-top: 10px; */
            margin-bottom: 20px;
        }

        .dates {
            display: inline-block;
            background-color: #fff;
            color: #333;
            padding: 9px 15px;
            border-radius: 19px;
            font-size: 12px;
            box-shadow: 0px 2px 4px 0px #00000040;
            box-shadow: 1px -1px 6px 0px #00000047 inset;
        }

        .price-section {
            display: flex;
            /* justify-content: space-between; */
            align-items: center;
            margin-bottom: 100px;
            gap: 85px;
        }

        .starts-text {
            font-size: 21px;
            text-align: start;
            font-weight: 800;
        }

        .price {
            font-size: 28px;
            font-weight: bold;
            text-align: right;
            margin-bottom: 20px;


        }

        .view-trip {
            position: absolute;
            bottom: -25px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            color: #00A6CE;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 5px 5px 44px 0px #3CADC9B2;
            font-size: 22px;
            z-index: 10;
            /* Updated from -9999 */
            transition: all 0.3s ease;
            width: 223;
            height: 76;
            padding-top: 10px;
            padding-right: 32px;
            padding-bottom: 10px;
            padding-left: 32px;
        }
    </style>
</head>

<body>
    <div class="card">

        <div class="card-content">
            <div class="card-image">
                <img src="asstes\test\card.png" alt="Ooty Hills">
            </div>
            <div style="display: flex; justify-content: space-between; margin: 0px 15px 0px 15px">
                <div class="trip-duration" style="display: flex; align-items: center; justify-content: center;">
                    <span class="icon" style="display: flex; align-items: center; font-weight: 800;"><img src="asstes\test\Duration.svg" alt=""></span> 3D/2N
                </div>
                <div class="ex-from" style="display: flex; align-items: center; justify-content: center; background-color: #4CB9D3;">
                    <span class="icon" style="display: flex; align-items: center; margin-right: 5px;">
                        <img src="asstes\test\Vector.svg" alt="">
                    </span>
                    <span style="color: #FFFFFF;">Ex : Chennai</span>
                </div>
            </div>
            <h1 class="title" style="margin: 13px 15px 0px 35px; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);;
">OOTY THE QUEEN OF HILLS</h1>
            <p class="locations" style="font-weight: 600; margin: 5px 15px 0px 15px; margin-left: 35px;">Nilgiris, Coonoor, Coimbatore</p>
            <div class="price-section" style="margin: 0px 20px 20px 15px">
                <div class="dates" style="display: flex; align-items: center; justify-content: center; ">
                    <span class="icon" style="display: flex; align-items: center;"><img src="asstes\test\calander.png" alt="" style="margin-right: 5px;"></span>
                    <span style="font-weight: 800;">May 10, 24, June 07, 21, 28, July 05,06, 12, 13, 18, 19</span>
                </div>
                <div>
                    <div class="starts-text">Starts</div>
                    <div class="price" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">₹7,499</div>
                </div>
            </div>
            <a href="#" class="view-trip">View Trip</a>
        </div>
    </div>
</body>

</html>
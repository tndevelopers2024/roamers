<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>OOTY The Queen of Hills Card</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
  body {
    margin: 0;
    background: #fff;
    font-family: 'Montserrat', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .card {
    background: linear-gradient(180deg, #99d6f0 0%, #52c8e2 100%);
    width: 320px;
    border-radius: 22px;
    box-shadow:
      0 10px 10px rgba(22, 88, 124, 0.25),
      inset 0px 0px 15px #93e1ff;
    overflow: hidden;
    color: #fff;
    position: relative;
  }
  .card img {
    display: block;
    width: 100%;
    height: 185px;
    object-fit: cover;
    border-radius: 22px 22px 0 0;
  }
  .card-content {
    padding: 14px 20px 54px;
    position: relative;
  }
  /* Top info: 3D/2N & location */
  .info-top {
    font-weight: 500;
    font-size: 12px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 6px;
    opacity: 0.9;
  }
  .info-left {
    display: flex;
    align-items: center;
    gap: 6px;
  }
  .icon-clock {
    width: 16px;
    height: 16px;
    background: #a0d5f1;
    color: #3b8eb5;
    border-radius: 4px;
    font-weight: 600;
    font-size: 11px;
    line-height: 14px;
    text-align: center;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    user-select: none;
  }
  .info-left span {
    color: #3183af;
    background: #a0d5f1;
    border-radius: 15px;
    padding: 2px 8px;
    font-weight: 600;
    font-size: 11px;
  }
  .location {
    font-size: 13px;
    color: #2f4a5c;
    user-select: none;
  }
  /* Title and subtitle */
  .title {
    font-size: 21px;
    font-weight: 700;
    line-height: 1.1;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin: 2px 0 4px;
  }
  .subtitle {
    font-size: 13px;
    opacity: 0.85;
    font-weight: 500;
    margin-bottom: 18px;
  }
  /* Date box */
  .date-box {
    background: #ffffff;
    padding: 6px 9px;
    border-radius: 16px;
    box-shadow:
      0 1px 5px rgba(46, 108, 132, 0.25),
      inset 0 -1px 0 #bde6ff;
    display: inline-flex;
    align-items: center;
    font-size: 11px;
    font-weight: 600;
    color: #2e6c84;
    user-select: none;
    gap: 6px;
    max-width: 248px;
    white-space: nowrap;
    overflow-x: auto;
  }
  .date-box::-webkit-scrollbar {
    display: none;
  }
  .calendar-icon {
    width: 15px;
    height: 15px;
    position: relative;
    flex-shrink: 0;
  }
  .calendar-icon:before {
    content: "";
    display: block;
    position: absolute;
    top: 3px;
    left: 0;
    width: 15px;
    height: 12px;
    border: 2.5px solid #3183af;
    border-radius: 3px;
    box-sizing: border-box;
  }
  .calendar-icon:after {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 3px;
    width: 3px;
    height: 3px;
    border-radius: 1.5px;
    background: #3183af;
    box-shadow: 6px 0 #3183af;
  }
  /* Price and button container */
  .bottom-info {
    position: absolute;
    left: 20px;
    right: 20px;
    bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .starts-text {
    font-size: 13px;
    color: #d7f0ff;
    text-align: right;
    user-select: none;
    line-height: 1.2;
  }
  .price {
    font-weight: 900;
    font-size: 26px;
    line-height: 1.2;
    color: #ffffff;
    user-select: none;
  }
  /* View trip button */
  .btn-viewtrip {
    position: absolute;
    left: 50%;
    bottom: -18px;
    transform: translateX(-50%);
    background: #ffffff;
    color: #52c8e2;
    border-radius: 42px;
    padding: 9px 42px;
    font-weight: 700;
    font-size: 14px;
    box-shadow:
      0 6px 12px rgb(82 200 226 / 0.4);
    cursor: pointer;
    user-select: none;
    transition: background-color 0.3s ease, color 0.3s ease;
    border: none;
  }
  .btn-viewtrip:hover {
    background: #3cd0f1;
    color: #fff;
    box-shadow:
      0 6px 15px rgb(0 141 181 / 0.8);
  }
</style>
</head>
<body>
  <div class="card" aria-label="Travel trip card for Ooty the Queen of Hills trip">
    <img
      src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/5b7676fb-28ea-456f-b244-3db9f668515b.png"
      alt="Woman wearing a gray dress, standing with arms spread wide happily in green hilly landscape with mountains and glowing sunlight behind."
      onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/d3f9ce4d-593d-49e3-9f43-9b0f63570b7b.png';"
    />
    <div class="card-content">
      <div class="info-top">
        <div class="info-left">
          <span class="icon-clock" aria-label="Duration 3 days and 2 nights">3D/2N</span>
          <span aria-hidden="true"></span>
        </div>
        <div class="location">Ex : Chennai</div>
      </div>
      <h1 class="title">OOTY THE QUEEN OF HILLS</h1>
      <p class="subtitle">Nilgiris, Coonoor, Coimbatore</p>
      <div class="date-box" aria-label="Trip dates">
        <span class="calendar-icon" aria-hidden="true"></span>
        May 10, 24, june 07, 21, 28, july 05,06, 12, 13, 18, 19
      </div>
      <div class="bottom-info">
        <div class="starts-text">Starts</div>
        <div class="price" aria-label="Price seven thousand four hundred ninety nine rupees">
          ₹7499
        </div>
      </div>
    </div>
    <button class="btn-viewtrip" aria-label="View trip details">View Trip</button>
  </div>
</body>
</html>


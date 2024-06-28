<!-- Import font Poppins -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>

<!-- Custom style shadow for Product Card -->
<style>
    .custom-shadow {
        box-shadow: 5px 5px 10px rgb(117, 117, 117);
        transition: box-shadow 0.3s;
    }

    .custom-shadow:hover {
        box-shadow: 5px 5px 10px rgb(255, 187, 73);
    }

    .dropdown {
        margin: 20px 0;
    }

    .dropdown button {
        background-color: #ffffff;
        color: black;
        padding: 16px 16px 16px 0;
        font-size: 16px;
        border: none;
        cursor: pointer;
        width: 100%;
        text-align: left;
    }

    .dropdown button:hover {
        background-color: #ddd;
        border-radius: 10px;
    }

    .dropdown-content {
        display: none;
        overflow: hidden;
        background-color: #ffffff;
        padding: 10px;
    }

    .dropdown-content p {
        margin: 0;
    }

    .custom-button {
        background-color: #f59e0b;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 9999px;
        width: 80px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .custom-button:hover {
        background-color: #1d4ed8;
    }
</style>
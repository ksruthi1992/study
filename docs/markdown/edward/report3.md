
### <a name="system"></a>System Architecture and System Design
<hr>

#### <a name="architcturalStyle"></a>Architecural Style
<hr>

For our archictecture we used a central database to store all data.  It is a MYSQL database. The webserver pulls all data from this one database.


#### <a name="identifyinSubsystems"></a>Identifying Subsystems
<hr>


  ![image](diagrams/subsystems.png)
  <br>
    The three subsystems are the client's browser, the server, and the database.  The client will access the server and the server retrieve data from the database. 

#### <a name="mapping"></a>Mapping Subsystems to Hardware
<hr>

    There is a server that serves a website.  
    Users are able to access the webpage with a web browser.  The UI that the user interacts with
    is run on the user's computer that is being used to visit the webpage.  The web server 
    runs on a linux machine that is being hosted remotely.  
#### <a name="data"></a>Persistent Data Storage
<hr>

Yes, we are using a relational database for data storage.  There are three tables.

1. Data Table     - Stores the user input as an int, and is associated with a floor and building id.

2. Building Table - Stores information about the building that will apply to all floors. 

3. Floor Table    - Stores information about each floor, and is associated with the building id. 

#### <a name="network"></a>Network Protocal
<hr>

We are using HTTP. We chose HTTP simply because the majority of the group had some experie with HTTP, and it is easy to work with.  This is the network protocal that our framework of choice uses. 

#### <a name="controlFlow"></a>Global Control Flow
<hr>

  ##### Execution Orderness

    The system is not procedure driven.  The user has the ability to select which part of
    the website that they would like to interact with.  There is no specific order that the 
    client has to interact with the website.  

  ##### Time Dependency

    There are automated algorithms that will run at specific times in the day.  
    These are realtime events that occur periodically.  The algorithms are for caching analyzed trends.

  ##### Concurrency 

    This system will run on an apache server.  That server will handle multiple requests 
    and allow for serveral users.  The users will all access the same database.  The apache php 
    will be single threaded. 

#### <a name="hardware"></a>Hardware Requirements
<hr>

    The system runs on a linux box that is remotely hosted.  The server only need about 1GB of
     space and a single core allocated to host and serve content.  To use the system, the client needs
    to have a computer capable of visiting a webpage.  




### <a name="algorithmsDataStructures"></a>Algorithms and Data Structures
<hr>

#### <a name="algorithms"></a>Algorithms

<br /><br />
Log In<br />
Pseudo-code:<br /><br />

//variable holding username provided<br />
$providedUser;<br />
//variable holding password provided<br />
$providedPassword;<br />
//check if user is in database
<br />if(doesUserExist($providedUser)){
<br />    //if successful then compare with password
<br />    if(logIn($providedUser,$providedPassword)){
<br />        //if successfull then log in and redirect to page for users logged in
<br />        $user=$providedUser;
<br />        request('/account/logIn');
<br />    }
<br />}

<hr>

#### <a name="dataStuctures"></a>Data Structures
Arrays
<br />The application developed makes use of multiple two dimensional or three dimensional arrays to minimize the amount of times the information is consulted to the database.
<br />
<br />Arrays of two dimensions are as follows:
<br />
<br />Array_of_Campuses{
<br />    Array_of_CSUS_Campus[
<br />        Array_of_AIRC_Floors('Floor 1' => trafficInFloorValue1, 'Floor 2' => trafficInFloorValue2),
<br />        Array_of_Library_Floors('Floor 1' => trafficInFloorValue1, 'Floor 2' => trafficInFloorValue2)
<br />    ],
<br />    Array_of_Davis_Campus[
<br />        Array_of_StudentCenter_Floors('Floor 1' => trafficInFloorValue1, 'Floor 2' => trafficInFloorValue2),
<br />        Array_of_Library_Floors('Floor 1' => trafficInFloorValue1, 'Floor 2' => trafficInFloorValue2)
<br />    ]
<br />}
<br />
<br />Algorithms that the team expects to develop will pull the necessary data as needed in order to display it in the appropiate manner on the graphical user interface.
<br />
<br />Hashed Tables
<br />
<br />Hashing tables haven't been designed and are expected to be developed to protect the user's password in the database for increased protection. These passwords will be unrecoverable and new ones have to be created if the user wants to restore their account due to forgotten paswords.
<hr>


### <a name="uIDandI"></a>User Interface Design and Implementation
<hr>

#### Find Spot
The user will start at the "Find a Spot" page, which will display what campus you are at and a search prompt to find desired building. Below, there is a list of all the buildings that can be clicked on to show the availability for each floor the building has.


![image](diagrams/FindSpot.PNG)


![image](diagrams/FindSpot2.PNG)


#### Menu
The sidebar menu will be available to the user at all times.  One tap on the menu icon will pull up the menu and allow the user to easily navigate the site. Can choose between "Find a Spot", "My Account", and "Support"

![image](diagrams/Menu.PNG)


#### Login Page
User can login to original account or create a new account, if they are new to the site.

![image](diagrams/Login.PNG)

#### Scenario 1: User looks for any open area nearby.
1. Navigation: 1 Total Click
* User clicks on one of the nearby listed building for information about open rooms.
2. Data Entry: None
3. Fraction of Nav vs Data Entry (Nav/Data)
* All Navigation

#### Scenario 2: User looks for any open areas, with desired features, nearby.
 -1. Navigation: 1 Total Click
 -* User clicks on desired features.
 
#### Scenario 3: User contributes data for a room.
 -1. Navigation: 4 Total Clicks
 -* User clicks on one of the nearby listed buildings for information about open rooms.
 -* User clicks "Update Status"
 -* User fills out form
 -* User clicks submit
 -2. Data Entry: 1 click
 -* User click one of the three options for how full a room is
 -3. Fraction of Nav vs Data Entry (Nav/Data)
 -* 4/1

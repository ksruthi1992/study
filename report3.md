## Report 3
### Cover Page and Individual Contribution

Course title: CSC 131 Section 4 - Computer Software Engineering

Team number: 2

Team name: Team Tux

Project: Study Spot Finder

Project website: www.SpotFinder.tk

Submission date: Monday, December 4, 2017 at 11:59 PM P.D.T.

Team members:

 *  Alex
 *  Edward
 *  Luis Roman
 *  Luke
 *  Nick
 *  Tara Ross
 *  Travis Keri

### Table of contents
 * [Interaction Diagrams](#interation)
 * [Class Diagram and Interface Specification](#interface)
   * [Class Diagram](#classDiagram)
 * [System Architecture and System Design](#system)
   * [Architectural Style](#architecturalStyle)
   * [Identifying Subsystems](#identifyingSubsystems)
   * [Mapping Subsystems to Hardware](#mapping)
   * [Persistent Data Storage](#data)
   * [Network Protocal](#network)
   * [Global Control Flow](#controlFlow)
   * [Hardware Requirements](#hardward)
 * [Algorithms and Data Structures](#algorithmsDataStructures)
   * [Algorithms](#algorithms)
   * [Data Structures](#dataStructures)
 * [User Interface Design and Implementation](#uIDandI)
 * [Progress Report and Plan of Work](#progressReportandPOW)
   * [Progress Report](#progressReport)
   * [Plan of Work](#planOfWork)

### <a name="interation"></a>Interation Diagram
<hr>

**Use case 1 & 2**

![image](diagrams/Interaction_Diagrams/Use_case_1-2_interaction_diagram.jpg)

**Use case 3**

We have decided to put this use case on hold, to focus on the others. If there is time to implement them we will come back to them.

**Use case 4**

![image](diagrams/Interaction_Diagrams/Use_case_4_interaction_diagram.jpg)

**Use case 5**

![image](diagrams/Interaction_Diagrams/Use_case_5_interaction_diagram.jpg)

**Use case 6**

![image](diagrams/Interaction_Diagrams/Use_case_6_interaction_diagram.jpg)

**Use case 7**

![image](diagrams/Interaction_Diagrams/Use_case_7_interaction_diagram.jpg)

### <a name="interface"></a>Class Diagram and Interface Specification
<hr>

#### <a name="classDiagram"></a>Class Diagram
-![image](diagrams/classDiagram.png)
<hr>

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


### <a name="algorithmsDataStructures"></a>Alorithms and Data Structures
<hr>

### <a name="algorithmsDataStructures"></a>Algorithms and Data Structures
<hr>

#### <a name="algorithms"></a>Algorithms
As of now, the team has only developed the algorithm for the user to log in. No other advanced algorithms have been developed at the moment.
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

### <a name="progressReportsandPOW"></a>Progress Report and Plan of Work
<hr>

### Use Cases implemented so far:

|Implemented     |Use Case Description                               |
|----------------|---------------------------------------------------|
|**In progress** | * UC-1 User searches for open study space         |
|**In Progress** | * UC-2 User searches for study space with amenity |
|**No**          | * UC-3 User reserves a room                       |
|**In progress** | * UC-4 System logs user in                        |
|**In progress** | * UC-5 System analyzes trends                     |
|**In limbo**    | * UC-6 User input how busy an area is             |
|**Not yet**     | * UC-7 User leaves comment                        |


### UC-1
    A search bar has been added to the front page of the website. 
### UC-2
    Amenities can now be chosen through a drop down accordian menu.
### UC-3
    Reserving of rooms has not been implemented yet.
### UC-4
    Login page accessible from the side menu with option to sign up. 
### UC-5
    A working algorithm has not been started on yet.
### UC-6
    No user access but admins can change traffic status.
### UC-7
    Option for users to leave comments have not been implemented yet.
#### <a name="planOfWork"></a>Plan of Work

![image](diagrams/PlanOfWorkChart.png)
![image](diagrams/PlanOfWorkGraph.png)

### Breakdown of Responsibilities

|Task           |Members               |
|---------------|----------------------|
|Coordinator    |Edward                |
|JavaScript     |_Edward, Alex_        |
|HTML/CSS       |_Nick_                |
|Algorithms     |_Travis_              |
|Backend        |_Luke, Luis, Tara_    |

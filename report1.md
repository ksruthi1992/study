## Study Spot Finder Report

### Table of contents  
* [Project Proposal](http://cloudmytrash.com:1234/tux-proposal.html)
* [Customer Requirements](#requirements)
* [Glossary](#glossary)
* [Functional Requirments](#functional)
  * [Stakeholders](#stakeholders)
  * [Actors and Goals](#actor)
  * [Use Cases](#usecase)
  * [System Sequence Diagrams](#diagrams)
* [Nonfunctional Requirements](#nonfunctional)
* [Domain Analysis](#domain_analysis)
  * [Domain Model](#domain_model)
  * [System Operation Contracts](#contracts)
  * [Mathematical Model](#math_model)
* [User Interface Design](#ui_design)
  * [Preliminary Design](#prelim_design)
  * [User Effort Estimation](#effort)
* [Plan of Work](#plan)
* [References](#ref)

### <a name="requirements"></a>Customer Requirements  
|Requirements|Priority|Description                                                                |
|------------|:------:|---------------------------------------------------------------------------|
|**REQ - 1** |5       |Find place on campus to study                                              |
|**REQ - 2** |3       |System finds a place near me                                               |
|**REQ - 3** |3       |System is easier to use than a map                                         |
|**REQ - 4** |1       |System can find group space                                                | 
|**REQ - 5** |2       |System can find quiet(nap) space                                           |
|**REQ - 6** |3       |User can reserve a room                                                    |
|**REQ - 7** |3       |System can search for amenities (locks/whiteboards/outlets/wi-fi/printers) |
|**REQ - 8** |4       |System analyzes data to track trends                                       |
|**REQ - 9** |3       |User can leave comments                                                    |


### <a name="glossary"></a>Glossary

### <a name="functional"></a>Functional Requirements

#### <a name="stakeholders"></a>Stakeholders

#### <a name="actor"></a>Actors and Goals  
<hr>

 *  Users-Use the system to find places to study 
 *  Admins-Manage the system to add or remove locations 

#### <a name="usecase"></a>Use Cases  
<hr> 

<!-- Hey guys, let's just assign our names to these okay? -->
Use Case Description  
 * UC-1 User searches for open study space  **_(Nick)_**
 * UC-2 User searches for study space with amenity  **_(Travis)_**
 * UC-3 User reserves a room  **_(Tara)_**
 * UC-4 System logs user  **_(Blank)_**
 * UC-5 System analyzes trends  **_(Luke)_**			
 * UC-6 System displays data  **_(Alex)_**
 * UC-7 User leaves comment  **_(Edward)_**
 
 <hr>


|Use Case 2         |User searches for a study space with amenity                                        |
|-------------------|------------------------------------------------------------------------------------|
|Related REQs       |REQ1, REQ2, REQ7                                                                    |
|Initiatinf Actors  |Student                                                                             |
|Actor's Goals      |To search for study spaces with amenities(White boards, outlets, good wi-fi, ect...)|
|Participating Actor|Database                                                                            |
|Preconditions      |Filter search is on screen                                                          |
|Postconditions     |Search results displayed on screen                                                  |
|:-----------------:|------------------------------------------------------------------------------------|
|Flow of Events     |                                                                                    |
|->                 |1.User selects the search option                                                    |
|<-                 |2.System displays the search page                                                   |
|->                 |3.User selects combatination of avalible amenities they want to search for          |
|<-                 |4.Database returns availible study areas and how full they are                      |
|:-----------------:|------------------------------------------------------------------------------------|
|Alt. Flow of events|                                                                                    |
|->                 |3a.User selects combanation of unavalible amenities                                 |
|<-                 |	4.Database returns and displays message to refine search                         |

|Use Case 3         |                                  |
|-------------------|----------------------------------|
|Related REQs       |REQ6                              |
|Initiating Actors  |Student                           |
|Actor's Goals      |To reserve a room                 |
|Participating Actor|Scheduler                         |
|Preconditions      |Room is empty                     |
|Postconditions     |Room will now be reserved         |

Use Case 5
System analyzes trends

Related REQs:  REQ1, REQ2, REQ4, REQ5, REQ6, and REQ8

Initiating Actors: System, Admin?

Actors Goal: Analyze trends to predict study space availability

Participating Actor: Student, Database

Preconditions:  database is not empty

Postconditions:  useage trend data is updated

Flow of Events for Main Success Scenerio:

-> System update triggers analysis algorithm

<- Database releases updated trend data

|Use Case 6          |System displays data                                  |
|--------------------|------------------------------------------------------|
|Related REQs        |REQ1, REQ2, REQ3, REQ4, REQ5                          |
|Initiating actors   |System                                                |
|Actor's goals       |System displays data in a clear and easy to use way   |
|Participating actors|Database                                              |
|Preconditions       |Data needs to be in the Base                          |

<hr>

#### <a name="diagrams"></a>System Sequence Diagrams

### <a name="nonfunctional"></a>Nonfunctional Requirements

### <a name="domain_analysis"></a>Domain Analysis

#### <a name="domain_model"></a>Domain Model

#### <a name="contracts"></a>System Operation Contracts

#### <a name="math_model"></a>Mathematical Model

### <a name="ui_design"></a>User Interface Design

#### <a name="prelim_design"></a> Preliminary Design

#### <a name="effort"></a>User Effort Estimation

### <a name="plan"></a>Plan of Work

### <a name="ref"></a>References

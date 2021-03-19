# Blue Taskbink

*Disclaimer: Please be careful when using this app on your local machine. This is meant for demonstration purposes, so please do not clone and commit to this repository. If anyone other than the owner has contributed to this repo, they may have added harmful code. If so, do not run this app on your local machine.*

Organize your daily tasks based on your personal resource capacity, i.e. time availability, "SP (sanity points)", and user-defined resources.

**_Currently in v1.0a _**
*Version v1.0 is in development in the development branch.*

## Version 1.0a implemented features

## Version 1.0 Business Requirements

- Non-Time resources
- Single User with login username, password (optional in this version), and nickname.
- Pile is linked directly to a user one-to-one. Contains a list of all the tasks not completed yet.
- Tasks each have total resource requirement bars, as well as Action Items with their own resource requirements.
- Tasks have CRUD options
- Tasks can be created
- Tasks can be read
- Tasks can be updated/have an edit mode with same options as create mode
  - Only available when in the Pile or in the Bin's PlanIt mode
- Tasks can be deleted
  - Only when on the Finished List or in the Pile
- Action items can be checked off.
- One Bin for one day's tasks.
  - Bins have resource capacities set by the user
  - Dumps all finished tasks into the Done Facility on the Finished List. 
  - It will return all partially finished tasks back into the pile with resources for completed portions used up and subtracted from the resource requirements.
  - Bin can toggle between 2 modes: PlanIt and DoIt. PlanIt actions take up resources.
- Time capacity is reset when the user clicks on "New Day"

## Version 1.1 Business Requirements

- "Rest" toggle setting will be available for tasks
  - Non-time resources will be subtracted from Bin usage upon completion
- SP will be defined and implemented
- Currency will be implemented
  - Common currencies will be readily available

## Version 1.2 Business Requirements

- User-defined resource option will be available
- Prefix/suffix option will be available for user-defined resources
- User can set an emoji, character, or word icon for Resources
- User can set an emoji, character, or word icon for Tasks

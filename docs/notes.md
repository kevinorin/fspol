## GenOn Project Notes

In order to meet timeline goals, generation On will be devleoped jointly by POL Digital and Fission Strategy. We need Fission to implement the GenerationOn website from its design in PDFs into a content management system. This will primarily be front-end work and content managment system work. We estimate that with the combined resources, we can target a release date of August 7th -- about 10.5 weeks. 

#### Documentation

[Creatives](https://www.dropbox.com/sh/vb0exzeebd4emmp/AABIljPM2Qe13E3WWnMGln2oa?dl=0)

[Wireframes](http://8s6k14.axshare.com/#g=1&p=start_1)

[Developer Documentation](https://docs.google.com/document/d/1BNha0p8VPSdusvLMICPaC2o3PvRvpVlj85UmKH2pcvk/edit?usp=sharing)

## Analysis

When taking a look at this website, note that much of the is application-driven. If we divvy the application up into "Content" vs "Application," and try and look at the wireframes through that lens:

1. Homepage -- Aggregated Content + Application
2. Dashboard -- Application
3. Track Your Service -- Application
4. Fact Sheet/Resource Page -- Content (with login component)
5. Resource List -- Content (aggregated)
6. Projects and Causes -- Content (aggregated)
7. Project PAge -- Content (aggregated)
8. Past Service Tracker Report - Application
9. Login - Application
10. JoinPages -- Application
11. Grants -- Application
12. Donate -- Content (needs revision)
13. Day of Service -- Archive (Content)
14. Story -- Application
15. Campaigns -- Application
16. Article -- Content
17. Calendar -- Calendar

As you can see we've got a lot of application mixed up in our content. For that reason we are taking an API driven approach. October will be hosting the content as well as view templates for the application, with application based content being served through javascript on October pages. This will allow for page templates to be edited by non-technical staff, while at the same time keeping application and content code mostly separated. 

## Timeline
Week of May 15 - Onboard Fission Strategy. Develop Internal Workplan. Develop strategy for changemaker additions. Check-in/introductions to Foster Interactive

Week of May 22 - Fission begins development in earnest, discusses adjustments to the timeline if needed. Fission Responsibilities: Begin cutting up .ais into HTML/CSS. POL Responsibilities: Build out stubs/mocks for reporting API. Finish changemaker/october auth strategy. POL Deploys Staging CMS for Fission. Fission devs learn OctoberCMS.

Week of May 29 - Auth strategy implementation complete by POL. Fission begins work on Javascript client for API. Fission begins work on implementing OctoberCMS content pages)

Week of June 5 - Completion of HTML/CSS framework/transition form PDFs/AI. Backend API Complete.

Week of June 12 - Javascript Client implementation begins, POL supports Fission with documentation, assistance as necessary in implementation. POL begins work on Deployment strategy

Week of June 19th - Fission begins further implementation of Javascript client and OctoberCMS implementation. POL management largely absent due to conference, so unlikely to have big decisions made here. Content Freeze from GenOn team.

Week of June 26 - First "stakeholder checkin" with business stakeholders. Should have draft one of site complete for demo. Demo on Monday. Feedback by Thursday. POL to Begin working on the data migration. 

Week of July 3 - Accept feedback, begin cadence of delivering product and gathering feedback in 2 week cycles. POL Team determines deployment strategy for October.

Week of July 17th - Second round of feedback and revisions from business stakeholders. Content migration from GatherContent.

Week of July 24th - Final round of feedback and revisions from business stakeholders. Content loading/editing transitions to inside of OctoberCMS.

Week of August 7th - Project completion.

### Requirements
- CSS Framework: Boostrap
- Javascript Framework: Ember, Vue, or React. Need to ask Fission what they're equipped for.
- CMS: OctoberCMS
- 

## Cadence:
Fission can join our slack channel for questions/interface with our team. Would like to do quick weekly checkins with Fission via Zoom (fridays?) if possible based on the timeline deliverables. 

## Definitions

* Project - 
* Cause - 
* Event - 
* Campaign - 
* Changemaker - Changemaker is the name of Points of Light's backend system for user authentication, projects, and other application services. Essentially it is our back-end. 

### Questions
- Hiding static content behind a login. Necessary?
- There are some missing creatives. For instance, story collection. Does that come from the service tracker entirely? Some of these appear in the wireframes. 
- How will auth work against changemaker? 

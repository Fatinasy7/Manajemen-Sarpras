# 🔗 Project Mapping: GitHub Projects ↔ Gantt Chart Timeline

**Document Version:** 1.0  
**Created:** 2026-10-10  
**Purpose:** Menghubungkan GitHub Projects dengan timeline Gantt Chart untuk tracking yang terintegrasi

---

## 📊 Overview: Struktur Projects per Fase

Gantt Chart dibagi menjadi **5 Fase Utama**. Setiap fase mempunyai **GitHub Project Board** sendiri:

```
GANTT CHART (13 Minggu)
│
├─ PHASE 1: Foundation (W1-W2)
│  └─ PROJECT: Phase 1 - Team Setup & KAK
│
├─ PHASE 2: Design & Analysis (W3-W5)
│  ├─ PROJECT: Phase 2 - System Analysis
│  ├─ PROJECT: Phase 2 - UI/UX Design
│  └─ PROJECT: Phase 2 - Backend Setup
│
├─ PHASE 3: Implementation (W6-W8)
│  ├─ PROJECT: Phase 3 - Backend Development
│  ├─ PROJECT: Phase 3 - Frontend Development
│  ├─ PROJECT: Phase 3 - Integration & Testing
│  └─ PROJECT: Prototype Milestone (W8)
│
├─ PHASE 4: Optimization (W9-W13)
│  ├─ PROJECT: Phase 4 - QA & Testing
│  ├─ PROJECT: Phase 4 - Bug Fixes & Polish
│  └─ PROJECT: Phase 4 - Production Ready
│
└─ CROSS-FUNCTIONAL: Ongoing
   ├─ PROJECT: Team Communication & Risks
   └─ PROJECT: Documentation & Sign-off
```

---

## 🎯 Detail Mapping Per Phase & Project

### PHASE 1: Foundation (W1-W2)
**Duration:** Oct 14-27, 2026 | **Status:** Sequential (Critical Path)

#### PROJECT 1.1: Phase 1 - Team Setup & KAK
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Phase 1 - Team Setup & KAK` |
| **Gantt Timeline** | W1-W2 (Oct 14-27) |
| **Owner** | Wahyu Bonita (PM) |
| **Columns** | Todo, In Progress, Review, Done |
| **Milestones** | KAK Approved (Oct 27) |
| **Labels** | `phase-1`, `critical-path`, `team-setup` |

**Issues/Cards to Create:**
```
✓ Task 1.1.1: Pembentukan Tim & Struktur Organisasi
  - Assigned: Wahyu Bonita
  - Due: 2026-10-20
  - Gantt: W1
  - Dependency: None
  - Label: team-setup

✓ Task 1.1.2: Diskusi Tema & Problem Statement
  - Assigned: Wahyu Bonita + Khansa Mufidah
  - Due: 2026-10-25
  - Gantt: W2
  - Dependency: After Task 1.1.1
  - Label: theme-definition

✓ Task 1.1.3: Finalisasi KAK Document
  - Assigned: Khansa Mufidah
  - Due: 2026-10-27
  - Gantt: W2
  - Dependency: After Task 1.1.2
  - Label: critical-deliverable
  - MILESTONE: KAK Approved ⭐

✓ Task 1.1.4: Team Kickoff Meeting & Alignment
  - Assigned: Wahyu Bonita
  - Due: 2026-10-28
  - Gantt: W2 End
  - Dependency: After Task 1.1.3
  - Label: kickoff
```

---

### PHASE 2: Design & Analysis (W3-W5)
**Duration:** Oct 28 - Nov 17, 2026 | **Status:** Parallel Execution

#### PROJECT 2.1: Phase 2 - System Analysis
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Phase 2 - System Analysis` |
| **Gantt Timeline** | W3-W5 (Oct 28 - Nov 17) |
| **Owner** | Khansa Mufidah (Analyst) |
| **Columns** | Backlog, Analysis, Review, Documentation, Done |
| **Milestones** | SRS Finalized (Nov 10), Architecture Doc (Nov 17) |
| **Labels** | `phase-2`, `analyst`, `parallel-work` |

**Issues/Cards to Create:**
```
✓ Task 2.1.1: Identifikasi Masalah & Studi Lapangan
  - Assigned: Khansa Mufidah
  - Due: 2026-11-03 (W3 Mid)
  - Gantt: W3-W4
  - Status: Sequential → After W2
  - Label: problem-analysis

✓ Task 2.1.2: Analisis Kebutuhan & SRS Document
  - Assigned: Khansa Mufidah
  - Due: 2026-11-10 (W4 End)
  - Gantt: W3-W4
  - Dependency: After Task 2.1.1
  - Label: srs-document
  - MILESTONE: SRS Finalized ⭐
  - Sync Point: Mid-W4 Design Review

✓ Task 2.1.3: Perancangan Diagram Sistem & ERD
  - Assigned: Khansa Mufidah
  - Due: 2026-11-17 (W5 End)
  - Gantt: W4-W5
  - Dependency: Parallel with SRS
  - Label: database-design
  - Sync Point: End-W4 API Contract Review

✓ Task 2.1.4: Business Logic Rules & Validation
  - Assigned: Khansa Mufidah
  - Due: 2026-11-24 (W6 Mid)
  - Gantt: W5-W6
  - Dependency: After ERD finalized
  - Label: business-logic
  - Sync Point: Mid-W5 Validation Rules Review

✓ Task 2.1.5: API Contract Documentation
  - Assigned: Khansa Mufidah + Akmal Palqah
  - Due: 2026-11-10 (W4 End)
  - Gantt: W4
  - Dependency: Blocking for Frontend
  - Label: critical-path, api-spec
  - BLOCKER: Must complete before W5
```

---

#### PROJECT 2.2: Phase 2 - UI/UX Design
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Phase 2 - UI/UX Design` |
| **Gantt Timeline** | W3-W5 (Oct 28 - Nov 17) |
| **Owner** | Fatin Asyifa (Frontend Lead) |
| **Columns** | Research, Design, Wireframe, Component Design, Review, Done |
| **Milestones** | Design System Ready (Nov 10), Framework Setup (Nov 17) |
| **Labels** | `phase-2`, `frontend`, `design`, `parallel-work` |

**Issues/Cards to Create:**
```
✓ Task 2.2.1: UI/UX Research & Competitive Analysis
  - Assigned: Fatin Asyifa
  - Due: 2026-11-03 (W3 Mid)
  - Gantt: W3
  - Label: research

✓ Task 2.2.2: Wireframe & Layout Design
  - Assigned: Fatin Asyifa
  - Due: 2026-11-10 (W4 End)
  - Gantt: W3-W4
  - Dependency: After Task 2.2.1
  - Label: wireframe
  - Sync Point: Mid-W3 Design Review

✓ Task 2.2.3: Design System & Component Library Setup
  - Assigned: Fatin Asyifa
  - Due: 2026-11-17 (W5 End)
  - Gantt: W4-W5
  - Dependency: After wireframe approved
  - Label: design-system
  - MILESTONE: Design System Ready ⭐

✓ Task 2.2.4: Framework & CSS Setup (React/Vue)
  - Assigned: Fatin Asyifa
  - Due: 2026-11-17 (W5 End)
  - Gantt: W4-W5
  - Dependency: Parallel with component design
  - Label: framework-setup
  - MILESTONE: Framework Ready ⭐
  - BLOCKER: Must complete before W6 implementation
```

---

#### PROJECT 2.3: Phase 2 - Backend Setup
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Phase 2 - Backend Setup` |
| **Gantt Timeline** | W3-W5 (Oct 28 - Nov 17) |
| **Owner** | Akmal Palqah (Backend Lead) |
| **Columns** | Setup, Configuration, Review, Testing, Done |
| **Milestones** | Framework Ready (Nov 10), Database Config (Nov 17) |
| **Labels** | `phase-2`, `backend`, `infrastructure`, `parallel-work` |

**Issues/Cards to Create:**
```
✓ Task 2.3.1: Git Repository & CI/CD Setup
  - Assigned: Akmal Palqah
  - Due: 2026-11-03 (W3 Mid)
  - Gantt: W3-W4
  - Label: infrastructure

✓ Task 2.3.2: Backend Framework Setup (Node/Laravel/Django)
  - Assigned: Akmal Palqah
  - Due: 2026-11-10 (W4 End)
  - Gantt: W3-W4
  - Dependency: After Task 2.3.1
  - Label: framework-setup
  - MILESTONE: Framework Ready ⭐

✓ Task 2.3.3: Database Schema & Migration Scripts
  - Assigned: Akmal Palqah + Khansa Mufidah
  - Due: 2026-11-17 (W5 End)
  - Gantt: W4-W5
  - Dependency: Requires ERD from Analyst (Task 2.1.3)
  - Label: database-design
  - MILESTONE: Database Config Ready ⭐
  - Sync Point: End-W4 API Contract Review

✓ Task 2.3.4: API Contract & Endpoint Documentation
  - Assigned: Akmal Palqah
  - Due: 2026-11-10 (W4 End)
  - Gantt: W4
  - Dependency: Parallel with Framework setup
  - Label: api-spec, critical-path
  - BLOCKER: Must complete before W5 Frontend integration
```

---

### PHASE 3: Implementation (W6-W8)
**Duration:** Nov 18 - Dec 8, 2026 | **Status:** Parallel Development + Integration

#### PROJECT 3.1: Phase 3 - Backend Development
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Phase 3 - Backend Development` |
| **Gantt Timeline** | W6-W8 (Nov 18 - Dec 8) |
| **Owner** | Akmal Palqah (Backend Developer) |
| **Columns** | Backlog, In Development, Code Review, Testing, Done |
| **Milestones** | Authentication Ready (Nov 25), API v1 Complete (Dec 1), Integration (Dec 8) |
| **Labels** | `phase-3`, `backend`, `development`, `api` |

**Issues/Cards to Create:**
```
✓ Task 3.1.1: User Authentication & Authorization
  - Assigned: Akmal Palqah
  - Due: 2026-11-25 (W6 End)
  - Gantt: W6-W7
  - Dependency: After DB schema ready
  - Label: authentication
  - MILESTONE: Auth Ready ⭐

✓ Task 3.1.2: CRUD - Fasilitas & Laboratorium
  - Assigned: Akmal Palqah
  - Due: 2026-12-01 (W7 End)
  - Gantt: W6-W7
  - Dependency: After Auth complete
  - Label: crud, core-feature

✓ Task 3.1.3: Booking Engine & Conflict Detection
  - Assigned: Akmal Palqah
  - Due: 2026-12-08 (W8 End)
  - Gantt: W7-W8
  - Dependency: After CRUD complete
  - Label: engine, complex-logic

✓ Task 3.1.4: Approval Workflow & Notifications
  - Assigned: Akmal Palqah
  - Due: 2026-12-15 (W8+ Integration)
  - Gantt: W8
  - Dependency: After booking engine
  - Label: workflow, backend-integration

✓ Task 3.1.5: API Testing & Mock Data
  - Assigned: Akmal Palqah + Caryksha Aulia
  - Due: 2026-12-08 (W8 End)
  - Gantt: W6-W8
  - Dependency: Continuous during development
  - Label: testing, qa
```

---

#### PROJECT 3.2: Phase 3 - Frontend Development
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Phase 3 - Frontend Development` |
| **Gantt Timeline** | W6-W8 (Nov 18 - Dec 8) |
| **Owner** | Fatin Asyifa (Frontend Developer) |
| **Columns** | Backlog, Component Dev, Integration, QA, Done |
| **Milestones** | Auth Pages (Nov 25), Core Pages (Dec 1), Integration (Dec 8) |
| **Labels** | `phase-3`, `frontend`, `development`, `ui` |

**Issues/Cards to Create:**
```
✓ Task 3.2.1: Login & Authentication Pages
  - Assigned: Fatin Asyifa
  - Due: 2026-11-25 (W6 End)
  - Gantt: W6-W7
  - Dependency: After API Auth endpoint ready
  - Label: authentication, pages
  - MILESTONE: Auth UI Ready ⭐

✓ Task 3.2.2: Dashboard & Facility Catalog Pages
  - Assigned: Fatin Asyifa
  - Due: 2026-12-01 (W7 End)
  - Gantt: W6-W7
  - Dependency: After CRUD API ready
  - Label: pages, core-ui

✓ Task 3.2.3: Booking Form & Detail Pages
  - Assigned: Fatin Asyifa
  - Due: 2026-12-08 (W8 End)
  - Gantt: W7-W8
  - Dependency: After booking API ready
  - Label: pages, forms

✓ Task 3.2.4: Schedule Conflict Display & Approval Pages
  - Assigned: Fatin Asyifa
  - Due: 2026-12-15 (W8+ Integration)
  - Gantt: W8
  - Dependency: After workflow API ready
  - Label: pages, complex-ui

✓ Task 3.2.5: Frontend Testing & Component Verification
  - Assigned: Fatin Asyifa + Caryksha Aulia
  - Due: 2026-12-08 (W8 End)
  - Gantt: W6-W8
  - Dependency: Continuous during development
  - Label: testing, qa
```

---

#### PROJECT 3.3: Phase 3 - Integration & Testing
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Phase 3 - Integration & Testing` |
| **Gantt Timeline** | W6-W8 (Nov 18 - Dec 8) |
| **Owner** | Caryksha Aulia (QA Lead) |
| **Columns** | Test Planning, Smoke Test, Integration Test, Bug Log, Verification |
| **Milestones** | Test Plan Ready (W5), Smoke Test (W6-W7), Integration Complete (W8) |
| **Labels** | `phase-3`, `testing`, `qa`, `integration` |

**Issues/Cards to Create:**
```
✓ Task 3.3.1: Test Plan & Test Case Documentation
  - Assigned: Caryksha Aulia
  - Due: 2026-11-17 (W5 End)
  - Gantt: W4-W5 (Preparation)
  - Label: testing, planning
  - MILESTONE: Test Plan Ready ⭐

✓ Task 3.3.2: Smoke Testing on Mock APIs
  - Assigned: Caryksha Aulia
  - Due: 2026-12-01 (W7 End)
  - Gantt: W6-W7
  - Dependency: After mock endpoints available
  - Label: smoke-test

✓ Task 3.3.3: Integration Testing (Frontend ↔ Backend)
  - Assigned: Caryksha Aulia + Dev Team
  - Due: 2026-12-08 (W8 End)
  - Gantt: W8
  - Dependency: After feature integration
  - Label: integration-test
  - MILESTONE: Integration Complete ⭐

✓ Task 3.3.4: Bug Reporting & Tracking
  - Assigned: Caryksha Aulia
  - Due: Continuous through W8
  - Gantt: W6-W8
  - Label: bug-tracking

✓ Task 3.3.5: Prototype Demo Preparation
  - Assigned: Caryksha Aulia + Wahyu Bonita
  - Due: 2026-12-08 (W8 End)
  - Gantt: W8
  - Dependency: After integration complete
  - Label: demo, milestone
  - MILESTONE: Prototype Demo Ready 🎯
```

---

### PHASE 4: Optimization & Finalization (W9-W13)
**Duration:** Dec 9, 2026 - Jan 26, 2027 | **Status:** Parallel Testing + Polish + Production

#### PROJECT 4.1: Phase 4 - QA & Comprehensive Testing
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Phase 4 - QA & Comprehensive Testing` |
| **Gantt Timeline** | W9-W13 (Dec 9 - Jan 26) |
| **Owner** | Caryksha Aulia (QA Lead) |
| **Columns** | Test Scope, Testing, Bug Report, Retesting, Verification |
| **Milestones** | Full Test Cycle (W9-W12), Final Verification (W13) |
| **Labels** | `phase-4`, `qa`, `testing`, `quality-gate` |

**Issues/Cards to Create:**
```
✓ Task 4.1.1: Functional Testing (All Features)
  - Assigned: Caryksha Aulia
  - Due: 2026-12-30 (W10 End)
  - Gantt: W9-W10
  - Label: functional-test

✓ Task 4.1.2: Performance & Load Testing
  - Assigned: Caryksha Aulia
  - Due: 2027-01-13 (W12 Mid)
  - Gantt: W11-W12
  - Label: performance-test

✓ Task 4.1.3: Security Testing & Vulnerability Scan
  - Assigned: Caryksha Aulia
  - Due: 2027-01-13 (W12 Mid)
  - Gantt: W11-W12
  - Label: security-test

✓ Task 4.1.4: User Acceptance Testing (UAT)
  - Assigned: Caryksha Aulia + Stakeholders
  - Due: 2027-01-19 (W12 End)
  - Gantt: W12
  - Label: uat

✓ Task 4.1.5: Final Verification & Sign-off
  - Assigned: Caryksha Aulia + Wahyu Bonita
  - Due: 2027-01-26 (W13 End)
  - Gantt: W13
  - Label: final-verification
  - MILESTONE: QA Sign-off ✅
```

---

#### PROJECT 4.2: Phase 4 - Bug Fixes & Polish
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Phase 4 - Bug Fixes & Polish` |
| **Gantt Timeline** | W9-W13 (Dec 9 - Jan 26) |
| **Owner** | Akmal Palqah + Fatin Asyifa |
| **Columns** | Bug Backlog, In Progress, Code Review, Testing, Done |
| **Milestones** | Critical Bugs Fixed (W10), Polish Complete (W12), Production (W13) |
| **Labels** | `phase-4`, `maintenance`, `bug-fix`, `optimization` |

**Issues/Cards to Create:**
```
✓ Task 4.2.1: Critical Bug Fixes from Demo
  - Assigned: Akmal Palqah + Fatin Asyifa
  - Due: 2026-12-22 (W9 End)
  - Gantt: W9
  - Label: bug-critical

✓ Task 4.2.2: High Priority Bug Fixes
  - Assigned: Akmal Palqah + Fatin Asyifa
  - Due: 2026-12-30 (W10 End)
  - Gantt: W9-W10
  - Label: bug-high
  - MILESTONE: Critical Bugs Cleared ⭐

✓ Task 4.2.3: Database Optimization & Query Performance
  - Assigned: Akmal Palqah
  - Due: 2027-01-13 (W12 Mid)
  - Gantt: W11-W12
  - Label: optimization, backend

✓ Task 4.2.4: Frontend Responsiveness & Browser Compatibility
  - Assigned: Fatin Asyifa
  - Due: 2027-01-13 (W12 Mid)
  - Gantt: W11-W12
  - Label: optimization, frontend

✓ Task 4.2.5: Admin Features & Enhanced Scheduling
  - Assigned: Akmal Palqah + Fatin Asyifa
  - Due: 2027-01-19 (W12 End)
  - Gantt: W12
  - Label: admin-features, enhancement

✓ Task 4.2.6: Code Documentation & Clean-up
  - Assigned: Akmal Palqah + Fatin Asyifa
  - Due: 2027-01-26 (W13 End)
  - Gantt: W13
  - Label: documentation, maintenance
```

---

#### PROJECT 4.3: Phase 4 - Production Ready
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Phase 4 - Production Ready` |
| **Gantt Timeline** | W13 (Jan 20-26) |
| **Owner** | Wahyu Bonita (PM) |
| **Columns** | Pre-Deploy Checklist, Deployment, Post-Deploy, Verification |
| **Milestones** | Deployment Ready (W13 Start), Live (W13 End) |
| **Labels** | `phase-4`, `deployment`, `production`, `final-milestone` |

**Issues/Cards to Create:**
```
✓ Task 4.3.1: Production Environment Setup
  - Assigned: Akmal Palqah
  - Due: 2027-01-20 (W13 Start)
  - Gantt: W13
  - Label: deployment, infrastructure

✓ Task 4.3.2: Database Migration & Backup Strategy
  - Assigned: Akmal Palqah
  - Due: 2027-01-20 (W13 Start)
  - Gantt: W13
  - Label: deployment, database

✓ Task 4.3.3: Deployment Checklist & Documentation
  - Assigned: Wahyu Bonita + Akmal Palqah
  - Due: 2027-01-23 (W13 Mid)
  - Gantt: W13
  - Label: deployment, documentation

✓ Task 4.3.4: Production Deployment & Monitoring Setup
  - Assigned: Akmal Palqah
  - Due: 2027-01-26 (W13 End)
  - Gantt: W13
  - Label: deployment, live
  - MILESTONE: PRODUCTION LIVE 🚀

✓ Task 4.3.5: Post-Launch Support & Monitoring
  - Assigned: Akmal Palqah + Fatin Asyifa
  - Due: 2027-01-26 (W13 End)
  - Gantt: W13
  - Label: post-launch, support
```

---

### CROSS-FUNCTIONAL: Ongoing & Support Projects

#### PROJECT C1: Team Communication & Risk Management
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Team Communication & Risks` |
| **Gantt Timeline** | W1-W13 (Ongoing) |
| **Owner** | Wahyu Bonita (PM) |
| **Columns** | Risk Register, In Progress, Mitigated, Closed |
| **Labels** | `cross-functional`, `risk`, `communication`, `ongoing` |

**Issues/Cards to Create:**
```
✓ Task C1.1: Weekly Standup & Status Tracking
  - Assigned: Wahyu Bonita
  - Due: Every Monday during project
  - Gantt: W1-W13 (Recurring)
  - Label: communication, standup

✓ Task C1.2: Risk Assessment & Mitigation Log
  - Assigned: Wahyu Bonita
  - Due: Every 2 weeks
  - Gantt: W1-W13 (Recurring)
  - Label: risk-management

✓ Task C1.3: Stakeholder Updates & Presentations
  - Assigned: Wahyu Bonita
  - Due: W2, W5, W8, W13
  - Gantt: Milestone presentations
  - Label: stakeholder-communication

✓ Task C1.4: Conflict Resolution & Escalation
  - Assigned: Wahyu Bonita
  - Due: As needed
  - Gantt: W1-W13 (Reactive)
  - Label: risk, issue-escalation
```

---

#### PROJECT C2: Documentation & Sign-off
| Attribute | Value |
|-----------|-------|
| **GitHub Project Name** | `Documentation & Sign-off` |
| **Gantt Timeline** | W1-W13 (Ongoing) |
| **Owner** | Khansa Mufidah (Analyst) |
| **Columns** | Required Docs, In Progress, Review, Approved, Signed |
| **Labels** | `cross-functional`, `documentation`, `compliance`, `ongoing` |

**Issues/Cards to Create:**
```
✓ Task C2.1: KAK & Requirement Documentation
  - Assigned: Khansa Mufidah
  - Due: 2026-10-27 (W2 End)
  - Gantt: W1-W2
  - Label: documentation, critical

✓ Task C2.2: System Architecture & Technical Documentation
  - Assigned: Khansa Mufidah
  - Due: 2026-11-17 (W5 End)
  - Gantt: W3-W5
  - Label: documentation, design

✓ Task C2.3: API Documentation & Backend Spec
  - Assigned: Akmal Palqah
  - Due: 2026-11-10 (W4 End) + Updated W8
  - Gantt: W4 & W8
  - Label: documentation, api

✓ Task C2.4: User Manual & Admin Guide
  - Assigned: Khansa Mufidah + Dev Team
  - Due: 2027-01-19 (W12 End)
  - Gantt: W12-W13
  - Label: documentation, user-guide

✓ Task C2.5: Final Project Report & Lessons Learned
  - Assigned: Wahyu Bonita + Khansa Mufidah
  - Due: 2027-01-26 (W13 End)
  - Gantt: W13
  - Label: documentation, final-report
  - MILESTONE: Project Closure ✅
```

---

## 🔄 Synchronization Points & Project Handoffs

```
PROJECT DEPENDENCY & HANDOFF FLOW:

┌─────────────────────────────────────────────────────────┐
│ PROJECT 1.1: Phase 1 - Team Setup & KAK (W1-W2)        │
│ MILESTONE: KAK Approved (Oct 27)                        │
└──────────────────────┬──────────────────────────────────┘
                       │
       ┌───────────────┼───────────────┐
       │               │               │
       ▼               ▼               ▼
┌──────────────┐ ┌──────────────┐ ┌──────────────┐
│ PROJECT 2.1  │ │ PROJECT 2.2  │ │ PROJECT 2.3  │
│ Analyst      │ │ Frontend     │ │ Backend      │
│ (W3-W5)      │ │ (W3-W5)      │ │ (W3-W5)      │
└──────┬───────┘ └──────┬───────┘ └──────┬───────┘
       │ ERD            │ Design          │ DB Schema
       │ API Spec ◄─────┴────────────────► Endpoint
       │ Workflow                         Rules
       │
       ▼ (Handoff @ W5)
┌─────────────────────────────────────────────────────────┐
│ PROJECT 3.1, 3.2, 3.3: Implementation (W6-W8)           │
│ MILESTONE: Prototype Demo Ready (Dec 8)                 │
└─────────────────────────────────────────────────────────┘
       │ API Functions ◄─────┐
       │ UI Components       │ Feedback
       │                     │
       ▼ (Handoff @ W8)
┌─────────────────────────────────────────────────────────┐
│ PROJECT 4.1, 4.2, 4.3: Optimization & Deployment (W9-13)│
│ MILESTONE: Production Live (Jan 26)                     │
└─────────────────────────────────────────────────────────┘
```

---

## 📊 Project Board Columns Template

**Standard Columns untuk ALL Project Boards:**

| Column Name | Purpose | When to Move |
|-------------|---------|-------------|
| **Backlog** | Not started, waiting for dependencies | New issues start here |
| **In Progress** / **In Development** | Currently being worked on | When work begins |
| **In Review** / **Code Review** | Awaiting approval/feedback | When work complete, PR opened |
| **Testing** / **QA** | Under testing/verification | After code review approved |
| **Done** | Completed & verified | After testing/QA passed |

**Optional Advanced Columns** (for complex phases):
- **Blocked** - Waiting for external dependencies
- **Documentation** - Awaiting documentation
- **Verification** - Final verification step

---

## 🎯 Key Tracking Metrics

### Per Project Board:

1. **Progress Tracker:**
   - % Complete = Done Cards / Total Cards
   - Burndown chart (optional)

2. **Timeline Compliance:**
   - Due date vs Actual date
   - Week-on-week progress

3. **Dependency Health:**
   - Number of Blocked cards
   - Critical path status

4. **Quality Metrics:**
   - Number of bugs reported
   - Bug fix rate
   - Test pass rate (for Phase 3-4)

---

## 📋 Quick Reference: Project Creation Checklist

When creating GitHub Projects, follow this checklist:

```
☑ Step 1: Create Project Board
  ☐ Project Name: Use naming convention from above
  ☐ Template: Choose "Table" or "Board" view
  ☐ Visibility: Repository (private/public as needed)
  ☐ Description: Link Gantt chart phase + timeline

☑ Step 2: Configure Columns
  ☐ Create standard columns per template
  ☐ Add automation (optional but recommended)
  ☐ Set up sorting/filtering

☑ Step 3: Create Issues & Cards
  ☐ Copy Task IDs from mapping above
  ☐ Fill required fields: Title, Description, Due Date
  ☐ Assign to team member
  ☐ Add labels from label list below
  ☐ Link to Gantt Chart timeline (in description)

☑ Step 4: Set Milestones
  ☐ Create milestone for each phase end date
  ☐ Link issues to milestone
  ☐ Set milestone due date

☑ Step 5: Configure View
  ☐ Default view: Board or Table
  ☐ Group by: Assignee or Status
  ☐ Sort by: Due date
```

---

## 🏷️ Standardized Labels for All Projects

Use these labels consistently across ALL project boards:

### By Phase:
- `phase-1` - Foundation phase
- `phase-2` - Design & Analysis
- `phase-3` - Implementation
- `phase-4` - Optimization

### By Team:
- `team-pm` - Project Manager tasks
- `team-analyst` - System Analyst tasks
- `team-frontend` - Frontend Developer tasks
- `team-backend` - Backend Developer tasks
- `team-qa` - QA/Testing tasks

### By Status/Type:
- `critical-path` - On critical path
- `critical-deliverable` - Must complete on time
- `blocker` - Blocks other tasks
- `enhancement` - Nice-to-have feature
- `bug-critical` - Critical bug fix
- `bug-high` - High priority bug
- `bug-medium` - Medium priority bug

### By Feature:
- `authentication` - Auth-related
- `crud` - Create-Read-Update-Delete
- `booking-engine` - Scheduling engine
- `api-spec` - API contract/specification
- `database-design` - DB schema/migration
- `testing` - Test related
- `documentation` - Doc work

### Cross-Functional:
- `sync-point` - Synchronization needed
- `parallel-work` - Can be done in parallel
- `sequential` - Must be done in sequence
- `ongoing` - Recurring/continuous
- `risk` - Risk item

---

## 🔗 How to Link in GitHub

### Link Gantt Chart in Project Descriptions:
```markdown
### 📊 Gantt Chart Reference
📈 [View Complete Gantt Chart](../blob/main/GANTT_CHART.md)

### Timeline
**Phase:** Phase X
**Duration:** Week X - Week X (Date Range)
**Status:** Sequential / Parallel
```

### Link Project in Gantt Chart:
Add to GANTT_CHART.md:
```markdown
### 🔗 GitHub Projects Mapping

For detailed tracking, see:
- [Phase 1 - Team Setup & KAK](../../projects/X)
- [Phase 2 - System Analysis](../../projects/X)
- [Phase 2 - UI/UX Design](../../projects/X)
- [Phase 2 - Backend Setup](../../projects/X)
- [Phase 3 - Backend Development](../../projects/X)
- [Phase 3 - Frontend Development](../../projects/X)
- [Phase 3 - Integration & Testing](../../projects/X)
- [Phase 4 - QA & Testing](../../projects/X)
- [Phase 4 - Bug Fixes & Polish](../../projects/X)
- [Phase 4 - Production Ready](../../projects/X)
- [Team Communication & Risks](../../projects/X)
- [Documentation & Sign-off](../../projects/X)
```

---

## 📝 Status Summary Table

| Phase | Project | PM Owner | Timeline | Status | Milestone |
|-------|---------|----------|----------|--------|-----------|
| **1** | Team Setup & KAK | Wahyu Bonita | W1-W2 | ⏳ Planned | KAK Approved (Oct 27) |
| **2** | System Analysis | Khansa Mufidah | W3-W5 | ⏳ Planned | SRS Finalized (Nov 10) |
| **2** | UI/UX Design | Fatin Asyifa | W3-W5 | ⏳ Planned | Design System Ready (Nov 10) |
| **2** | Backend Setup | Akmal Palqah | W3-W5 | ⏳ Planned | Framework Ready (Nov 10) |
| **3** | Backend Dev | Akmal Palqah | W6-W8 | ⏳ Planned | API v1 Complete (Dec 1) |
| **3** | Frontend Dev | Fatin Asyifa | W6-W8 | ⏳ Planned | Core Pages (Dec 1) |
| **3** | Integration & Testing | Caryksha Aulia | W6-W8 | ⏳ Planned | Prototype Demo (Dec 8) 🎯 |
| **4** | QA & Testing | Caryksha Aulia | W9-W13 | ⏳ Planned | Final QA (Jan 26) |
| **4** | Bug Fixes & Polish | Mixed | W9-W13 | ⏳ Planned | Polish Done (Jan 19) |
| **4** | Production Ready | Wahyu Bonita | W13 | ⏳ Planned | Live 🚀 (Jan 26) |
| **X** | Communication & Risks | Wahyu Bonita | W1-W13 | ⏳ Ongoing | Weekly |
| **X** | Documentation & Sign-off | Khansa Mufidah | W1-W13 | ⏳ Ongoing | Project Closure (Jan 26) |

---

## 🚀 Next Steps

1. **Create GitHub Projects:**
   - Go to `/Fatinasy7/Manajemen-Sarpras/projects`
   - Click "New project"
   - Create projects following naming convention above

2. **Populate Issues:**
   - Use Tasks from each project section
   - Add all details (labels, due dates, assignees)
   - Set milestones

3. **Configure Automation:**
   - Auto-move issues based on PR/commit status
   - Auto-archive closed issues
   - Set up issue templates

4. **Link Everything:**
   - Update GANTT_CHART.md with project links
   - Add project links in README
   - Update repository description

5. **Team Access:**
   - Grant team members appropriate access
   - Ensure everyone can see their assignments
   - Schedule kickoff with projects walkthrough

---

**Document Created:** 2026-10-10  
**Last Updated:** 2026-10-10  
**Maintained by:** Wahyu Bonita (Project Manager)  
**Status:** Ready for Project Board Creation ✅

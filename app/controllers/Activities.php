<?php


class Activities extends Controller
{

    /**
     * Activities constructor.
     */
    public function __construct()
    {
        $this->activityModel = $this->model('Activity');
    }

    public function index()
    {
        $activities = $this->activityModel->getActivities();
        $data = array(
            'title' => 'Teenused',
            'activities' => $activities
        );
        $this->view('activities/index', $data);
    }

    public function show($id)
    {
        $activity = $this->activityModel->getActivity($id);
        $partners = $this->activityModel->getPartners($id);
        $data = array(
            'activity' => $activity,
            'partners' => $partners
        );
        $this->view('activities/show', $data);
    }
}
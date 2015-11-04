<?php

namespace Mhshohel\Appbajarticket\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $table = 'ticketit';
    protected $dates = ['completed_at'];

    /**
     * List of completed tickets.
     *
     * @return bool
     */
    public function hasComments()
    {
        return (bool) count($this->comments);
    }

    public function isComplete()
    {
        return (bool) $this->completed_at;
    }

    /**
     * List of completed tickets.
     *
     * @return Collection
     */
    public function scopeComplete()
    {
        return $this->whereNotNull('completed_at');
    }

    /**
     * List of active tickets.
     *
     * @return Collection
     */
    public function scopeActive()
    {
        return $this->whereNull('completed_at');
    }

    /**
     * Get Ticket status
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo('Mhshohel\Appbajarticket\Models\Status', 'status_id');
    }

    /**
     * Get Ticket priority
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function priority()
    {
        return $this->belongsTo('Mhshohel\Appbajarticket\Models\Priority', 'priority_id');
    }

    /**
     * Get Ticket category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('Mhshohel\Appbajarticket\Models\Category', 'category_id');
    }

    /**
     * Get Ticket owner
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Get Ticket agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent()
    {
        return $this->belongsTo('Mhshohel\Appbajarticket\Models\Agent', 'agent_id');
    }

    /**
     * Get Ticket comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('Mhshohel\Appbajarticket\Models\Comment', 'ticket_id');
    }

//    /**
    //     * Get Ticket audits
    //     *
    //     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //     */
    //    public function audits()
    //    {
    //        return $this->hasMany('Mhshohel\Appbajarticket\Models\Audit', 'ticket_id');
    //    }
    //

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use DateTime;
class Order extends Model
{
    use HasFactory;
    
    protected $fillable = ['total', 'status', 'can_be_cancelled', 'created_at', 'updated_at'];

    public function getId(): int
    {
        return $this -> attributes['id'];
    }

    public function setId($id): void
    {
        $this -> attributes['id'] = $id;
    }

    public function getTotal(): float
    {
        return $this -> attributes['total'];
    }

    public function setTotal($total): void
    {
        $this -> attributes['total'] = $total;
    }

    public function getStatus(): string
    {
        return $this -> attributes['status'];
    }
    
    public function setStatus($status): void
    {
        $this -> attributes['status'] = $status;
    }

    public function getCanBeCancelled(): bool
    {
        return $this -> attributes['can_be_cancelled'];
    }

    public function setCanBeCancelled($canBeCancelled): void
    {
        $this -> attributes['can_be_cancelled'] = $canBeCancelled;
    }

    public function getCreatedAt(): DateTime
    {
        return $this -> attributes['created_at'];
    }

    public function setCreatedAt($createdAt): void
    {
        $this -> attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this -> attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt): void
    {
        $this -> attributes['updated_at'] = $updatedAt;
    }
}

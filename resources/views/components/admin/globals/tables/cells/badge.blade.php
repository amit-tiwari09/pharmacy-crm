@php
$value = data_get($row, $column['key']);
$statusMap = [
0 => ['label' => 'Inactive', 'bg' => 'bg-red-100', 'text' => 'text-red-800', 'dot' => 'bg-red-600'],
1 => ['label' => 'Active', 'bg' => 'bg-green-100', 'text' => 'text-green-800', 'dot' => 'bg-green-600'],
'INACTIVE' => [
'label' => 'Inactive',
'bg' => 'bg-red-100',
'text' => 'text-red-800',
'dot' => 'bg-red-600',
],

'ACTIVE' => [
'label' => 'Active',
'bg' => 'bg-green-100',
'text' => 'text-green-800',
'dot' => 'bg-green-600',
],

'ONLEAVE' => [
'label' => 'On Leave',
'bg' => 'bg-yellow-100',
'text' => 'text-yellow-800',
'dot' => 'bg-yellow-600',
],
];

$badge = $statusMap[$value] ?? [
'label' => $value,
'bg' => 'bg-gray-100',
'text' => 'text-gray-800',
'dot' => 'bg-gray-600',
];
@endphp

<span
    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium {{ $badge['bg'] }} {{ $badge['text'] }}">
    <span class="h-1.5 w-1.5 rounded-full mr-2 {{ $badge['dot'] }}"></span>
    {{ $badge['label'] }}
</span>